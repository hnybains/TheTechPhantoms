<?php include '../config.php';?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php




if ($_POST['action'] == 'checkfilealreadyexist') { // file already exist check
   $filename = $_FILES['file']['name'];

   $location = '../admin/certificates/' . $filename;

   $response = 0;
   if (file_exists($location)) {
      $response = 1;
   }
   echo $response;
   exit;
}

if ($_POST['action'] == 'checkcoursefilealreadyexist') { // Course file already exist check
   $filename = $_FILES['file']['name'];

   $location = '../admin/uploads/' . $filename;

   $response = 0;
   if (file_exists($location)) {
      $response = 1;
   }
   echo $response;
   exit;
}

if ($_POST['action'] == 'uploadfile') {
   if (isset($_FILES['file']['name'])) {
      $filename = $_FILES['file']['name'];
      $course_id = $_POST['course_id'];
      $emailaddress = $_POST['emailaddress'];

      $location = 'certificates/' . $filename;

      $response = 0;
      if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
         $response = 1;
         pg_query(sprintf("UPDATE public.enroll SET certificate_generated=TRUE, certificate='" . $filename . "' WHERE course_id =" . $course_id . " AND emailaddress='" . $emailaddress . "';"));
      }

      echo $response;
      exit;
   }
}

if ($_POST['action'] == 'delete_perticular_message') {
   pg_query(sprintf("DELETE from public.messages where sno=" . $_POST['sno'] . ";"));
}

if ($_POST['action'] == 'delete_course_data') {
   pg_query(sprintf("DELETE from public.course_specific_data where course_id=" . $_POST['course_id'] . " and course_data='" . $_POST['data'] . "';"));
}


if ($_POST['action'] == 'add_course_data') {

   $countfiles = count($_FILES['files']['name']);
   $upload_location = "../admin/uploads/";

   $count = 0;
   for($i=0;$i < $countfiles;$i++){

   // File name
   $filename = $_FILES['files']['name'][$i];

   // File path
   $path = $upload_location.$filename;


      // Upload file
      if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$path)){
        $count += 1;
        $sql2 = "INSERT INTO public.course_specific_data(course_id,course_data)values(" . pg_escape_string($_POST['course_id']) . ",'" . basename($_FILES["files"]["name"][$i]) . "')";
        $ret2 = pg_query($sql2);
      } 

}
}


//    // $total = count($_FILES['file']['name']);
//    $target_dir = "../admin/uploads/";
//    $succesfull = 0;

//    // for ($i = 0; $i < $total; $i++) {
//       $target_file = $target_dir . basename($_FILES["file"]["name"]);
//       if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
//          $sql2 = "INSERT INTO public.course_specific_data(course_id,course_data)values(" . pg_escape_string($_POST['course_id']) . ",'" . basename($_FILES["file"]["name"]) . "')";
//          $ret2 = pg_query($sql2);
//          if ($ret2)
//             $succesfull = $succesfull + 1;
//       }
//    }

//    if ($succesfull == 1) {
//       echo '<script>alert("Course Added Successfully")</script>';
//    } else {
//       echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
//    }
// }


pg_close($db);

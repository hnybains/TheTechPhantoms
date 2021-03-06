<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include '../config.php';?>
<?php include 'userinfo_admin.php'; ?>
<?php

// Initialize the session
//session_start();
 $dbconn = pg_connect("sslmode=require sslrootcert=certificates/ca-certificate.crt host=thetechphantoms-do-user-8660169-0.b.db.ondigitalocean.com port=25060 dbname=Postgres user=CMHA password=j38mp49ya50ow9im");
 
 if(isset($_POST['delete_all'])&&!empty($_POST['delete_all'])){
    //console.log("testing1");
    // $hashpassword = md5($_POST['password']);
    $sql ="Delete from public.messages ";
    $data = pg_query($dbconn,$sql); 
   
    if($data){ 
      //  console.log("testing3");
        // session_start();
        // $_SESSION["EmailAdmin"] = $_POST['email'];
        header('Location: AdminPanel.php');    
    }else{
        echo "<div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>Close X</a>
        <p><strong>Alert!</strong></p>
        Email or password wrong! Please try again!.
    </div>'";
    }
}


pg_close($dbconn); 

?>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='../css/studentStyle.css' rel='stylesheet' type="text/css"/>
<link href='../css/admin_table.css' rel='stylesheet' type="text/css"/>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<svg style="display:none;"></svg>

<script src="../js/jquery-3.6.0.min.js"></script>
<script>
  function deleteMessage(sno)
  {
    $.ajax({
        type: "POST",
        url: 'admin_ajax.php',
        data: {
          action: 'delete_perticular_message',
          sno: sno
        },
        success: function(html) {
          location.reload();
        }

      });
  }
</script>
</head>


<body>

  <header class="page-header">
  <?php include 'LeftMenu.php';?>
</header>
<section class="page-content">
  <section class ="grid">
    <article style="height: auto;">
      <div class="main__container" style="align-items: center;">
        <div class="main__title">
            <div class="main__greeting" >
              <img src="../images/png/MentalHealthForAll.png" alt="Trulli" width="1000" height="260">
              </br></br></br></br><h1>Messages</h1>
               <form  method="post">
              <table class="content-table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php include '../config.php';?>
              <?php
                $flag = 0;
              $sql = pg_query(sprintf("SELECT * FROM public.messages ORDER BY sno DESC;"));
              while ($row = pg_fetch_assoc($sql)) {
                $flag = 1;
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['name']) . " </td>";
                echo "<td>" . htmlspecialchars($row['email']) . " </td>";
                echo "<td>" . htmlspecialchars($row['message']) . " </td>";
                echo "<td><button id='".$row['sno']."' onclick='deleteMessage(this.id)'>Delete</button></td>";
                echo "</tr>";
              }
              pg_close($db); ?>
            </tbody>
            <tr>
              <?php
                if($flag==1)
                echo"<th colspan='4'><input type='submit' class='btn btn-primary' name='delete_all' value='Delete All'></th>";
              else
                echo"<th colspan='4'>No Message</th>";
                ?>
                
              </tr>
            </thead>
          </table>
        </form>
    </article>
  <footer class="page-footer">
  </footer>
</section>
</body>
</head>
</html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include '../config.php';?>
<?php include 'userinfo_admin.php'; 
ob_start();
?>
<?php
 if (!$db){  
  echo "<center><h1>Doesn't work =(</h1></center>";  
  }else
  {  
  
  }
 if(isset($_POST['save'])&&!empty($_POST['save'])){
  $hashpassword = md5($_POST['password']);
      
      $RegisterSql = "INSERT INTO cmhauser (firstname, middlename, lastname, emailaddress, phonenumber, dateofbirth, city, province, gender, ethnicity, indigenousidentity, languagespoken, housingstatus, sourceofincome, occupation,culturalconsiderations, livingarrangement, username, password) VALUES ('".pg_escape_string($_POST['firstname'])."','".pg_escape_string($_POST['middlename'])."','".pg_escape_string($_POST['lastname'])."','".pg_escape_string($_POST['emailaddress'])."','".pg_escape_string($_POST['phonenumber'])."','".pg_escape_string($_POST['dateofbirth'])."','".pg_escape_string($_POST['city'])."','".pg_escape_string($_POST['province'])."','".pg_escape_string($_POST['gender'])."','".pg_escape_string($_POST['ethnicity'])."','".pg_escape_string($_POST['indigenousidentity'])."','".pg_escape_string($_POST['languagespoken'])."','".pg_escape_string($_POST['housingstatus'])."','".pg_escape_string($_POST['sourceofincome'])."','".pg_escape_string($_POST['occupation'])."','".pg_escape_string($_POST['culturalconsiderations'])."','".pg_escape_string($_POST['livingarrangement'])."','".pg_escape_string($_POST['username'])."','".pg_escape_string($hashpassword)."')";
      $ret = pg_query($db, $RegisterSql);
      if($ret){
          echo '<script>alert("Student Added Successfully")</script>';
              echo "Data saved Successfully";
      }else{
          
              echo "Soething Went Wrong";
      }
 }

pg_close($db);
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='../css/studentStyle.css' rel='stylesheet' type="text/css" />
  <link href='../css/admin_table.css' rel='stylesheet' type="text/css" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <svg style="display:none;"></svg>
</head>


<body>
  <header class="page-header">
    <?php include 'LeftMenu.php'; ?>
  </header>
  <section class="page-content">
    <div class="grid">
      <article style="height: 800px">
        <div class="main__container">
          <div class="main__title">
            <div class="main__greeting">
              <h1>Add New Student</h1>
            </div>
          </div>
              <form method="post" enctype="multipart/form-data">
                <table class="content-table">
                  <thead>
                    <tr></tr>
                  </thead>
                   <tbody>
              <tr>
              <td>*Username : </td>
              <td><input type="text" name="username" class="form-control" required></td>
              <td>*Password : </td>
              <td><input type="password" name="password" class="form-control" required></td>
              </tr>
              <tr>
              <td>*First name : </td>
              <td><input type="text" name="firstname" class="form-control" required></td>
              <td>Middle name : </td>
              <td><input type="text" name="middlename" class="form-control" placeholder="Optional"></td>
              </tr>
              <tr>
              <td>*Last name : </td>
              <td><input type="text" name="lastname" class="form-control" placeholder="Optional"></td>
              <td>*Email : </td>
              <td><input type="email" name="emailaddress" class="form-control" required></td>
              </tr>
              <tr>
              <td>*Phone Number : </td>
              <td><input type="tel" name="phonenumber" class="form-control" required></td>
              <td>*Date of Birth : </td>
              <td><input type="date" name="dateofbirth" class="form-control" required></td>
              </tr>
              <tr>
              <td>City : </td>
              <td><input type="text" name="city" class="form-control" placeholder="Optional"></td>
              <td>Province : </td>
              <td><input type="text" name="province" class="form-control" placeholder="Optional"></td>
              </tr>
              <tr>
              <td>Gender: <input type='radio'  id='male' name='gender' value='male'><label for='male'>Male</label></td>
              <td><input type='radio' id='female' name='gender' value='female'><label for='female'>Female</label></td>
              <td>Ethnicity : </td>
              <td><input type="text" name="ethnicity" class="form-control" placeholder="Optional"></td>
              </tr>
              <tr>
              <td>Cultural Considerations : </td>
              <td><input type="text" name="culturalconsiderations" class="form-control" placeholder="Optional"></td>
              <td>Indigenous Identity : </td>
              <td><input type="text" name="indigenousidentity" class="form-control" placeholder="Optional"></td>
              </tr>
              <tr>
              <td>Language Spoken : </td>
              <td><input type="text" name="languagespoken" class="form-control" placeholder="Optional"></td>
              <td>Housing Status : </td>
              <td><input type="text" name="housingstatus" class="form-control" placeholder="Optional"></td>
              </tr>
              <tr>
              <td>Living Arrangement : </td>
              <td><input type="text" name="livingarrangement" class="form-control" placeholder="Optional"></td>
              <td>Source Of Income : </td>
              <td><input type="text" name="sourceofincome" class="form-control" placeholder="Optional"></td>
              </tr>
              <tr>
              <td>Occupation : </td>
              <td><input type="text" name="occupation" class="form-control" placeholder="Optional"></td>
              <td colspan="2"><center><input type="submit" class="btn btn-danger" name="save" value="submit"></center></td> 
              </tr>
                   </tbody>
                </table>
              </form>
            </div>
    </article>
  <footer class="page-footer">
  </footer>
</div>
</body>
</head>
</html>
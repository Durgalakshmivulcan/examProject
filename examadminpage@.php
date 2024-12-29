<?php
require_once "examconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exampage1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
<style>
 body {
            background-color: #d7d7d7;
            background-image: url('images/8a3e3e201b6a0d632e7ce338c5d26a65.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            min-height: auto;
            margin: 0;
        }

        img.img-fluid {
            width: 100%;
            height: auto;
            border-radius: 25px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        @media (max-width: 768px) {
            body {
                font-size: 14px;
            }

            img.img-fluid {
                border-radius: 0;
                box-shadow: none;
            }
        }
       
        
    </style>
</head>
<body style="background-color:#d7d7d7;">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if(isset($_POST['save'])){
    $loginid1=$_POST['loginid'];
    $pwd2=$_POST['pwd'];
    $Getdetails1=mysqli_query($conn, "SELECT a_id FROM adminlogin WHERE a_status='1'and a_mail='$loginid1' and a_pwd='$pwd2'") or die(mysqli_error($conn));
    $resdetails1=mysqli_fetch_object($Getdetails1);
        $main_id=$resdetails1->a_id;
        session_start();
        $_SESSION["main_id"] = $main_id;
        $count=mysqli_num_rows($Getdetails1);
        if($count > 0){
            header ("location:examdetailspage.php");

                   } 
        else {
          $Getdetails=mysqli_query($conn, "SELECT u_id FROM userlogin WHERE u_status='1'and u_mail='$loginid1' and u_pwd='$pwd2'") or die(mysqli_error($conn));
    $resdetails=mysqli_fetch_object($Getdetails);
        $main_id1=$resdetails->u_id;
        session_start();
        $_SESSION["main_id1"] = $main_id1;
        $count=mysqli_num_rows($Getdetails);
        if($count > 0){
         
            header ("location:examinstructions.php");
            } 
        else {
          echo '<script>';
          echo   "Swal.fire({
                 icon: 'error',
                 title: 'invalid',
                 text: 'Please enter valid mail-ID or password'
             })";
         echo '</script>';
          }

          }
}


        ?>
<form method="POST">
<div class="container ">
        <div class="row mt-3 p-0">
        <div class="col-4"></div>

            <div class="col-4 mt-1">
                <img src="images/download12.png" class="img-fluid" alt="Logo">
            </div>
        </div>

        <div class="row mt-4 p-0">
            <div class="col-md-6">
                <img src="images/online-exam-concept-choose-correct-260nw-2211532065.jpg" class="img-fluid" alt="Exam Image">
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-5" style="height: 100%;">
                <div class="card text-center" style="background-color: #cbcddc; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 100%;">
                    <div class="card-header">
                        <h1><span style="color: green; font-family: 'Calistoga', serif;">Login <i class="bi bi-person-fill"></i></span></h1>
                    </div>
                    <div class="card-body my-4 ms-3">
                        <table>
                            <tr>
                                <td><span style="color: green; font-size: 20px; font-family: 'Calistoga', serif;">Login ID</span><span style="color: red;">*</span></td>
                                <td><span style="color: green;">:</span></td>
                                <td><input class="form-control mb-4 ms-2" type="email" name="loginid" id="loginid" value=""></td>
                            </tr>
                            <tr>
                                <td><span style="color: green; font-size: 20px; font-family: 'Calistoga', serif;">Password</span><span style="color: red;">*</span></td>
                                <td><span style="color: green;">:</span></td>
                                <td><input class="form-control text-capitalize ms-2" type="password" name="pwd" id="pwd" value=""></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer text-body-secondary mb-3">
                        <input style="background-color: green; text-align: center; width: 100px; font-family: 'Calistoga', serif; color: white;" class="btn btn-pill mt-5" type="submit" name="save" id="save" value="Login">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

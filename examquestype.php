<?php
        require_once "examconfig.php";
        
        session_start();
        $main_id1 =$_SESSION["main_id"] ;
        
        $Getname=mysqli_query($conn, "SELECT * FROM adminlogin WHERE a_status='1'and a_id='$main_id1'") or die(mysqli_error($conn));
            $resdetails2=mysqli_fetch_object($Getname);
                $username=$resdetails2->a_name;
          if(isset($_POST['save3'])){
            header ("location:examsecpage.php");

              }
              if(isset($_POST['save4'])){
                header ("location:examsecpage1.php");
    
                  }
                          
                  if(isset($_POST['back'])){
                    header ("location:examdetailspage.php");
                
                    
                }
                if(isset($_POST['dash'])){
                  header ("location:examdetailspage.php");
              
                  
              }
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
body{
        background-color:#d7d7d7;
        background-image:url('images/8a3e3e201b6a0d632e7ce338c5d26a65.jpg');
        background-repeat: no-repeat;
    background-size: cover; 
    height:595px;
    
    }
    </style>
</head>

<body >
<form method="POST">
<div class="row p-0 m-0" style="background-color:#06403c;">
<div class="col-xl-3 col-lg-3 col-3">
<img src="images/download12.png" style="width:200px;height:50px;border-radius:20px;margin-left:10px;margin-top:10px;"><br>
<input class="text-center ms-5 text-capitalize "style="font-weight:bold; width:130px;height:40px;border:none;background-color:#06403c;color:white;" type="text"name="loginid" id="loginid" value="<?php echo $username;?>"></div>  
<div class="col-xl-1 col-lg-1 col-1"></div>
<div class="col-xl-5 col-lg-5 col-5 mt-3 ms-3  "><h1 style="color:#2cc920;">Welcome<i class="bi bi-emoji-smile-fill"></i></h1> 
</div>
<div class="col-xl-2 col-lg-2 col-2">
<input class="btn btn-success mt-4"type="submit" name="dash" id="dash" value="Dash Board">
<input class="btn btn-success mt-4 ms-3"type="submit" name="back" id="back" value="Back">
</div>
</div>

<div class="row m-0 p-0">
<div class="col-xl-4 col-lg-4 col-md-4 mt-5"></div>
<div class="col-xl-8 col-lg-8 col-md-8 mt-5">
<h2 class="ms-5">Type of questions</h2>
                <table border="0px">
                   <tr>
                    
                    <td ><input class="btn btn-success mt-5 me-5"type="submit" name="save3" id="save3" value="MCQ Questions"></td>
                    <td ><input class="btn btn-success mt-5 ms-5"type="submit" name="save4" id="save4" value="General Questions"></center></td>
                    </tr>

                </table>     
</div>
</div>  
</div>


        </form>
    
    <script>
        
</script>
    </body>
</html>
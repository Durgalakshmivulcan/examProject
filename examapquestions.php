<?php
require_once "examconfig.php";
session_start();
$main_id1 =$_SESSION["main_id"] ;
$Getname=mysqli_query($conn, "SELECT * FROM adminlogin WHERE a_status='1'and a_id='$main_id1'") or die(mysqli_error($conn));
    $resdetails2=mysqli_fetch_object($Getname);
        $username=$resdetails2->a_name;


if(isset($_POST['back'])){
    header ("location:examsecpage.php");

    
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if(isset ($_POST['save'])){
  $ques=$_POST['name'];
  $opa=$_POST['a'];
  $opb=$_POST['b'];
  $opc=$_POST['c'];
  $opd=$_POST['d'];

$qry=mysqli_query($conn,"insert into aptitude(ap_question,apo_1,apo_2,apo_3,apo_4)values('$ques','$opa','$opb','$opc','$opd')") or die(mysqli_error($conn));
if($ques!=''&& $opa!=''&& $opb!=''&& $opc!=''&& $opd!=''){
    echo '<script>';
    echo   "Swal.fire({
           icon: 'success',
           title: 'success',
           text: 'Data inserted successfully'
       })";
   echo '</script>';
  
  }else{
    echo '<script>';
    echo   "Swal.fire({
           icon: 'error',
           title: 'invalid',
           text: 'Please enter all input fields'
       })";
   echo '</script>';
  }
}
?>
<form method="POST">
<div class="row p-0 m-0" style="background-color:#06403c;">

<div class="col-xl-3 col-lg-3 col-3">
<img src="images/download12.png" style="width:200px;height:50px;border-radius:20px;margin-left:10px;margin-top:10px;"><br>
<input class="text-center ms-5 text-capitalize "style="font-weight:bold; width:130px;height:40px;border:none;background-color:#06403c;color:white;" type="text"name="loginid" id="loginid" value="<?php echo $username;?>"disabled></div>
<div class="col-xl-1 col-lg-1 col-1"></div>

<div class="col-xl-5 col-lg-5 col-5 mt-3 ms-3  "><h1 style="color:#2cc920;">Welcome<i class="bi bi-emoji-smile-fill"></i></h1> 
</div>
<div class="col-xl-2 col-lg-2 col-2">
<input class="btn btn-success mt-4"type="submit" name="dash" id="dash" value="Dash Board">
<input class="btn btn-success mt-4 ms-3"type="submit" name="back" id="back" value="Back">
</div>
</div>
<div class="row p-0 m-0">
    <div class="col-xl-3 col-lg-3 col-md-3 mt-5"></div>
        <div class="col-xl-7 col-lg-7"style="height:400px;padding:50px;">
                <h1>Aptitude Questions page</h1>
                <table border="0px">
                    <tr>
                    <tr>
                        <td colspan="3">Question:<textarea class=" text-center text-capitalize form-control w-100" rows="2" cols="100" type="textarea" name="name" id="name" value=""></textarea></td>
                    </tr>  
                    <tr>
                        <td>A.<input class="my-3 form-control" type="text" name="a" id="a" value=""></td>
                        <td>B.<input  class="my-3 form-control" type="text" name="b" id="b" value=""></td>
                    </tr>
                    <tr>
                        <td>C.<input  class="my-3 form-control" type="text" name="c" id="c" value=""></td>
                        <td>D.<input  class="my-3 form-control" type="text" name="d" id="d" value=""></td>
                    </tr>
                    
                    </tr>
                    <tr>
                        <td colspan="3"><center><input class="btn btn-success" type="submit" name="save" id="save" value="Next"></center></td>
                    </tr>
                </table>        
            </div>

    

    </div>

</div>
    <script>

</script>
   
</body>
 
</html>
<?php
        require_once "examconfig.php";
        session_start();
        $main_id1 =$_SESSION["main_id"] ;
        $Getname=mysqli_query($conn, "SELECT * FROM adminlogin WHERE a_status='1'and a_id='$main_id1'") or die(mysqli_error($conn));
            $resdetails2=mysqli_fetch_object($Getname);
                $username=$resdetails2->a_name;
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
<style>
</style>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <?php
                            if(isset($_POST['save5'])){

            //     $Gettype=mysqli_query($conn, "SELECT sec_name FROM sectiontable WHERE sec_status='1'") or die(mysqli_error($conn));
            // while($sectype1=mysqli_fetch_object($Gettype)){
            //     $secname1=$sectype1->sec_name;
                
                $selectedSection = $_POST['sec']; // Get the selected section from the form

                if ($selectedSection=="aptitude") {
                        header("location:examadminquesapgen.php");
                        
                }else if ($selectedSection=="reasoning"){
                    
                    header("location:examadminquesregen.php");
                        
                    }else if ($selectedSection=="verbal"){
                   
                        header("location:examadminquesvrgen.php");
                       
                    }else if ($selectedSection=="technical"){
                    
                        header("location:examadminquestcgen.php");
                       
                    }else {   
                    
                        echo '<script>';
                        echo   "Swal.fire({
                            icon: 'error',
                            title: 'invalid',
                            text: 'Please select section name'
                        })";
                        echo '</script>';
                }
            }
            if(isset($_POST['back'])){
                header ("location:examquestype.php");
            
                
            }
        
?>
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
<div id="sblock">
<div class="row m-0 p-0">
<div class="col-xl-4 col-lg-4 col-md-4 mt-5"></div>
<div class="col-xl-8 col-lg-8 col-md-8 mt-5">
<h2>Section details</h2>
                <table border="0px">
                <tr>
                        <td><b>Section name</b></td>
                        <td>:</td>
                        <td><select class="form-select ms-4 my-4"name="sec" id="sec"><option value ="ap">--Select--</option>
                            <option value="aptitude">Aptitude</option>
                            <option value="reasoning">Reasoning</option>
                            <option value ="verbal">Verbal</option>
                            <option value="technical">Technical</option>
                        </select>
                            </td>
                    </tr>
                    <tr>
                        <td><b>No.of questions</b></td>
                        <td>:</td>
                        <td><input class="form-control ms-4" type="number" name="nqs" id="nqs" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="3"><center><input class="btn btn-success mt-4"type="submit" name="save5" id="save5" value="Create exam"></center></td>
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
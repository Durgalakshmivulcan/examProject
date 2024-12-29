
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<style>
body{
        background-color:#d7d7d7;
        background-image:url('images/8a3e3e201b6a0d632e7ce338c5d26a65.jpg');
        background-repeat: no-repeat;
    background-size: cover; 
    height:595px;
    
    }
    @keyframes durga2{
                from{top:0px;width: 250px;background-color:blue;border-radius: 0px;}
                to{top:0px;width:0px;background-color:blue;border-radius: 0px;}
            }
            @keyframes durga3{
                from{right:250px;left:0px;width:250px;background-color:blue;border-radius: 0px;}
                to{right:0px;left:250px;width: 0px;background-color:blue;border-radius: 0px;}
                }
    </style>
</head>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<?php
        require_once "examconfig.php";
        
        session_start();

        $main_id1 =$_SESSION["main_id"] ;
        ?><style>
            #admin,#correction,#keyblock,#exname,#stumarksblock{
                display:none;
            }
            </style>
            <?php
        
        $Getname=mysqli_query($conn, "SELECT * FROM adminlogin WHERE a_status='1'and a_id='$main_id1'") or die(mysqli_error($conn));
            $resdetails2=mysqli_fetch_object($Getname);
                $username=$resdetails2->a_name;
                $useremail=$resdetails2->a_mail;
                if(isset($_POST['button1'])){
                    ?><style>
                    
                    #admin{
                display:block;
            }
            #imageblock{
                display:none;
            }
                    </style>
                    <?php

                }
          if(isset($_POST['button2'])){
            ?><style>
                    
                    #keyblock{
                display:block;
            }
            #imageblock{
                display:none;
            }
                    </style>
                    <?php
                    
                }
                if(isset($_POST['button3'])){
                    ?><style>
                    
                    #correction{
                        display:block;
            }
            #imageblock{
                
                display:none;
            }
                    </style>
                    <?php
                    
                }
                if(isset($_POST['done'])){
                    ?><style>
                    
                    #keyblock{
                display:none;
            }
            #imageblock{
                display:block;
            }
                    </style>
                    <?php
                }
                if(isset($_POST['save5'])){
                    ?><style>
                    
                    #stumarksblock{
                display:none;
            }
            #buttons{
                display:block;
            }
            #imageblock{
                display:block;
            }
            </style>
                     <?php
               }
            

             ?>
            
             
<form method="POST" class="container m-0 p-0">
        <div class="row p-0">
<div class="col-xl-6 col-lg-6 col-6">
<img src="images/download12.png" style="width:200px;height:50px;border-radius:20px;margin-left:10px;margin-top:10px;"><br></div>
<div class="col-xl-2 col-lg-2 col-2 justify-content-center  mt-2 "style="font-family: 'Calistoga', serif;text-align:center;"><h1 >Welcome</h1> </div>
<div class="col-xl-3 col-lg-3 col-3  justify-content-center ">
<input class=" justify-content-center align-items-center mt-4 text-capitalize "style="font-weight:bold; border:none;font-size:20px;" type="text"name="loginid" id="loginid" value="<?php echo $username;?>"disabled></div>

<div class="col-xl-1 col-lg-1 col-1">
<button type="button" style="font-size:40px; color:green;margin-left:100px;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn rounded-circle mt-2 "><i class="bi bi-person-circle"></i></button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title " style="font-size:24px; color:green;margin-left:150px;font-family: 'Calistoga', serif;text-align:center; " id="exampleModalLabel">VULCANTECHS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <i style="font-size:40px;" class="bi bi-person-circle"></i></br>
        <input class="form-control text-center text-capitalize" style="background-color:white; border:none;font-size:20px;" type="text" name="loginid" id="loginid" value="<?php echo $username;?>" disabled></br>
        <input class="form-control text-center text-capitalize" style="background-color:white; border:none;" type="text" name="loginid12" id="loginid12" value="<?php echo $useremail;?>" disabled>
      </div>
      <div class="modal-footer text-center">
        <a type="button" href="logout.php" class="btn btn-success mx-auto">Logout</a>
      </div>
    </div>
  </div>
</div>

<div id="buttons">
<div class="row mt-5 p-0 me-0">
<div class="col-xl-1 col-lg-1 col-md-1 mt-1 "></div>

<div class="col-xl-3 col-lg-3 col-md-3 mt-1 ms-5">
                <table border="0px">
                    <tr>
                    <td colspan="3"><center><input  style="width:150px;height:50px;font-weight:bold;font-size:20px;"class="btn btn-success rounded-pill mt-5"type="submit" name="button1" id="button1" value="Exam details"></center></td>
                    </tr>
               
                    <tr>
                    <td colspan="3"><center><input  style="width:150px;height:50px;font-weight:bold;font-size:20px;" class="btn btn-success rounded-pill mt-5"type="submit" name="button2" id="button2" value="Exam key"></center></td>
                    </tr>
               
                    <tr>
                    <td colspan="3"><center><input  style="width:150px;height:50px;font-weight:bold;font-size:20px;" class="btn btn-success rounded-pill mt-5"type="submit" name="button3" id="button3" value="Marks"></center></td>
                    </tr>
                </table>     
</div>
<div class="col-xl-7 col-lg-7 col-md-7 mt-1 ms-5">
<div id="imageblock">

<img src="images/notebook-laptop-computer-with-green-chalkboard-screen_26018-1203.jpg" style="width:600px;height:400px;border-radius:50px;margin-left:50px;"></div>

<div id="admin">

<h2 style="margin-left:100px;">Exam details</h2>
                <table border="0px">
                    <tr>
                        <td>Exam Name</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3"type="text" name="name" id="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Total no.of Questions</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3" type="number" name="nq" id="nq" value=""></td>
                    </tr>
                    <tr>
                        <td>Time duration</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3" type="text" name="tm" id="tm" value=""></td>
                    </tr>
                    
                    <tr>
                        <td>No. of sections</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3" type="number" name="ns" id="ns" value=""></td>

                    </tr>
                   
                    
                    <tr>
                        <td colspan="3"><center><input onclick="save11()" class="btn btn-success mt-4"type="button" name="save1" id="save1" value="Enter"></center></td>
                    </tr>

                </table>     
</div> 


<div id="correction">


<h2 style="margin-left:100px;">Marks of a candidate</h2>
                <table border="0px">
                    <tr>
                        <td>Enter the name of the candidate</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3" type="text" name="name1" id="name1" value=""></td>
                    </tr>
                    <tr>
                        <td>Enter the ID of the candidate</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3" type="number" name="nq1" id="nq1" value=""></td>
                    </tr>
                    
                   
                    
                    <tr>
                        <td colspan="3"><center><input onclick="save12()" class="btn btn-success mt-4"type="button" name="save2" id="save2" value="Enter"></center></td>
                    </tr>

                </table>     
                </div> 

<div id="keyblock">


<h2 style="margin-left:100px;">Exam key</h2>
                    <table border="0px">
                    <tr>
                        <td>Question number</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3" type="number" name="nq2" id="nq2" value=""></td>
                    </tr>
                    <tr>
                        <td>Answer</td>
                        <td>:</td>
                        <td><input class="my-3 form-control ms-3" type="text" name="ans" id="ans" value=""></td>
                    </tr>
                   
                    
                    <tr>
                    <td></td>
                    <td></td>
                        <td colspan="4"><center><input onclick="save13()" class="btn btn-success mt-4"type="button" name="save3" id="save3" value="Enter"><input class="btn btn-warning ms-5 mt-4"type="submit" name="done" id="done" value="Done"></center></td>

                        </tr>

                </table>     
              
</div>
<div id="stumarksblock">

<h2 style="margin-left:100px;">Student data</h2>
<table class="table table-bordered p-0 m-0 border-dark border border-2">
                    <tr>
                        <th>S.no</th>
                        <th>Student's name</th>
                        <th>Total marks</th>
                    </tr>
                    <tr>
                        <td><?php echo $candid;?></td>
                        <td><?php echo $candname1;?></td>
                        <td><?php echo $totalmarks;?></td>
                    </tr>
                    </table>
                    
                    
                        <input style="margin-left:200px;" class="btn btn-success mt-4"type="submit" name="save5" id="save5" value="Ok">

                       

                     
                </div> 

</div>
 </div>




        </form>
    
    <script>
    $(document).ready(function () {
        
        
});

function save11() {

// AJAX request
$.ajax({
    type: "POST",
    url: "examsave1.php",
     data: {
                save11: true,
                name: $("#name").val(),
                nq: $("#nq").val(),
                tm: $("#tm").val(),
                ns: $("#ns").val(),
            },
    success: function (response) {
        if (response.success) {
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "Data inserted successfully!",
            }).then((response) => {
                if (response.isConfirmed) {
                    window.location.href = "examquestype.php";
                }
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Invalid",
                text: "Please enter all input fields!",
            });
        }
    },
    error: function () {
        // Handle error
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "An error occurred while processing the request.",
        });
    },
});
}

function save12(){
                $.ajax({
            type: "POST",
            url: "examsave2.php",
            data: {
                save2: true,
                name1: $("#name1").val(),
                nq1: $("#nq1").val(),
            },
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: "Total marks: " + response.totalmarks,
                    });

                    // Additional logic if needed
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Invalid",
                        text: response.message,
                    });
                }
            },
        });
    }
    function save13(){
        $.ajax({
            type: "POST",
            url: "examsave3.php",
            data: {
                save3: true,
                nq2: $("#nq2").val(),
                ans: $("#ans").val(),
            },
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: "Data inserted successfully!",
                    });

                    // Additional logic if needed
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Invalid",
                        text: response.message,
                    });
                }
            },
        });
    
    }
</script>
    </body>
</html>

        
            
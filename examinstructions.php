<?php
require_once "examconfig.php";
session_start();
$main_id1 =$_SESSION["main_id"] ;

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
<div class="row p-0 m-0" >  
    <div class="col-xl-4 col-lg-4 col-4">
</div>
<div class="col-xl-5 col-lg-5 col-5">
<img src="images/download12.png" style="width:400px;height:50px;border-radius:20px;margin-left:10px;top: 2%;position:absolute;"><br>

</div>
      <div class="col-xl-2 col-lg-2 col-2">
      </div>
<div class="col-xl-1 col-lg-1 col-1">
<button type="button" style="font-size:40px; color:green;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn rounded-circle mt-2"><i class="bi bi-person-circle"></i></button>
</div>
<div>
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
</div>
<div class="row p-0 mb-4">
<div class="col-xl-2 col-lg-2 col-md-2 "></div>
<div class="col-xl-10 col-lg-10 col-md-10  ps-5">

            <h2 class="mb-4" style="color:#0A7029;font-weight:bold;font-size:30px;">Rules to follow during all online proctored exams:</h2>
                <table class="py-5 px-5" border="5px" style="color:black;font-weight:bold;font-size:20px;">
                <tr><td class="pb-1 pt-2 px-5">1.No cell phones or other secondary devices in the room or test area</td></tr>
                <tr><td class="py-1 px-5">2.Your desk/table must be clear or any materials except your test-taking device</td></tr>
                <tr><td class="py-1 px-5">3.No dual screens/monitors</td></tr>
                <tr><td class="py-1 px-5">4.No use of additional applications or internet</td></tr>
                <tr><td class="py-1 px-5">5.There are 4 sessions in this exam.Each session carrys 25 marks,They are...</td></tr>
                <tr><td class="py-1 px-5">(i).Aptitude session</td></tr>
                <tr><td class="py-1 px-5">(ii).Reasoning session</td></tr>
                <tr><td class="py-1 px-5">(iii).Verbal session</td></tr>
                <tr><td class="py-1 px-5">(iv).Technical session</td></tr>
                <tr><td class="py-1 px-5">6.no negative marks</td></tr>
                    <tr>
                        <td class="py-1 px-5"><input onclick="check()" class="ch" type="checkbox" name="agree" id="agree" value="agree">I agree all terms and conditions.</td>                  </td>
                    </tr>
                    
                    <tr>
                        <td colspan="3"><center><input class="mb-4 btn btn-secondary"style="color:black;" onclick="inst()"type="button" name="save" id="save" value="Next"disabled></center></td>
                    </tr>

                </table>     
</div>
</div>   

        </form>
    
    <script>
    function check() {
    // Get the checkbox element
    var checkBox = document.getElementById("agree");

    // Get the save button element
    var saveButton = document.getElementById("save");

    // Enable or disable the save button based on the checkbox status
    saveButton.disabled = !checkBox.checked;

    // Change the background color based on the checkbox status (optional)
    saveButton.style.background = checkBox.checked ? '#FF4500' : 'initial';
}

function inst() {
    // Perform your action (e.g., navigate to the next page)
    location.replace("examquestions.php");
}

</script>
    </body>
</html>
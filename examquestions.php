
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    body {
      margin: 0;
      
      background-color:#d7d7d7;
    }
    input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: inline-block;
        width: 20px;
        height: 20px;
        margin:0;
        padding: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 50%;
        cursor: pointer;
    }

    input[type="radio"]:checked {
        background-color:blue; /* Change this to the desired background color when the radio button is checked */
        border-color: #007bff; /* Change this to the desired border color when the radio button is checked */
    }
    .styled-button {
            display: inline-block;
            padding: 10px 25px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            color: #3498db;
            background-color: blue;
            border: none;
            position: relative;
            clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
            /* transition: background-color 0.3s, color 0.3s; */
        }

  </style>

</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
require_once "examconfig.php";
$main_id2 =$_SESSION["main_id1"] ;
$Getname=mysqli_query($conn, "SELECT * FROM userlogin WHERE u_status='1'and u_id='$main_id2'") or die(mysqli_error($conn));
    $resdetails2=mysqli_fetch_object($Getname);
        $username=$resdetails2->u_name;
        

        
?>
<form method="POST">
<div class="row p-0 m-0"style="background-color:#0f6409;" >
<div class="col-xl-2 col-lg-2 col-2  mt-4">
<img src="images/download12.png" style="width:200px;height:50px;border-radius:20px;margin-left:10px;"></div>

<div class="col-xl-1 col-lg-1 col-1  "></div>
<div class="col-xl-3 col-lg-3 col-3  mt-3 "><h1 style="color:white;">All The Best<i class="bi bi-hand-thumbs-up-fill"></i></h1> 
</div>
<div class="col-xl-4 col-lg-4 col-4 mt-4">
<input class=" ms-5 text-capitalize form-control "style="font-weight:bold; height:40px;border:none;background-color:#0f6409;;font-weight:bold;font-size:20px;color:white;" type="text"name="loginid" id="loginid" value="<?php echo $username;?>"></div> 

<div class="col-xl-2 col-lg-2 col-2">
<h2 style="color:rgb(207, 122, 10);margin-top:10px;"><u>Time left</u></h2> 
<div id="timer"style="font-size:40px;color:white;"> 

</div>
</div>
</div>

<div class="row p-0 m-0">
<div class="col-xl-8 col-lg-8 col-md-12 col-8">

        <div class="col-xl-8 col-lg-8 col-md-12 ms-5 ps-5"style="height:400px;padding:10px;">
            <div class="panel">
                <div id="examquestionsblock">
                <table border="0px">
                    <tr>
                    <b>Q.</b><input style="width:25px;font-size:15px;background-color:#d7d7d7;border:none;font-weight:bold;" type="tel" name="num" id="num" value=""disabled>:<td colspan="3"><textarea class="mb-3 ms-5 mt-0  text-capitalize form-control w-100"style="background-color:#d7d7d7;border:none;resize: none;font-weight:bold;" rows="4" cols="100" type="textarea" name="name" id="name" value=""disabled></textarea></td>
                    </tr>   
                    <tr>
                        <td><input class="ms-5 me-2" style="width:17px;height:17px;font-weight:bold;" type="radio" name="rad" id="rad1" value="A"><b>A.)</b><input style="background-color:#d7d7d7;border:none;font-weight:bold;" class="my-3 ms-5 text-capitalize" type="text" name="a" id="a" value=""disabled></td>
                        </tr>   
                    <tr>
                        <td><input class="ms-5 me-2" style="width:17px;height:17px;font-weight:bold;"  type="radio" name="rad" id="rad2" value="B"><b>B.)</b><input style="background-color:#d7d7d7;border:none;font-weight:bold;" class="my-3 ms-5 text-capitalize" type="text" name="b" id="b" value=""disabled></td>
                    </tr>
                    <tr>
                        <td><input class="ms-5 me-2" style="width:17px;height:17px;font-weight:bold;"  type="radio" name="rad" id="rad3" value="C"><b>C.)</b><input style="background-color:#d7d7d7;border:none;font-weight:bold;" class="my-3 ms-5 text-capitalize" type="text" name="c" id="c" value=""disabled></td>
                        </tr>   
                    <tr>
                        <td><input class="ms-5 me-2" style="width:17px;height:17px;font-weight:bold;"  type="radio" name="rad" id="rad4" value="D"><b>D.)</b><input style="background-color:#d7d7d7;border:none;font-weight:bold;" class="my-3 ms-5  text-capitalize" type="text" name="d" id="d" value=""disabled></td>
                    </tr>

                   
                </table> 
                
</div>
            </div>
</div>
        
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-2 mt-3 border-start border-dark">
    <h3 style="color:#a40475;margin-left:20px;"><u>Aptitude</u></h3>
    <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(1)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q1" id="q1" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(2)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q2" id="q2" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(3)" class="btn rounded-pill;"  style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q3" id="q3" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(4)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q4" id="q4" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(5)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q5" id="q5" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(6)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q6" id="q6" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(7)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q7" id="q7" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(8)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q8" id="q8" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(9)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q9" id="q9" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input class="btn rounded-pill;" onclick="setQuestionButtonBackground(10)" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q10" id="q10" value="Q10"></center></td>
                    </tr>
                    
                </table>
                <h3 style="color:#a40475;margin-left:20px;"><u>Reasoning</u></h3>

                <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(11)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q11" id="q11" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(12)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q12" id="q12" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(13)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q13" id="q13" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(14)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q14" id="q14" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(15)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q15" id="q15" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(16)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q16" id="q16" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(17)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q17" id="q17" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(18)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q18" id="q18" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(19)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q19" id="q19" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input class="btn rounded-pill;" onclick="setQuestionButtonBackground(20)" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q20" id="q20" value="Q10"></center></td>
                    </tr>
                    
                </table>
</div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-2 mt-3">
                <h3 style="color:#a40475;margin-left:20px;"><u>Verbal</u></h3>

                <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(21)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q21" id="q21" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(22)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q22" id="q22" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(23)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q23" id="q23" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(24)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q24" id="q24" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(25)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q25" id="q25" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(26)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q26" id="q26" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(27)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q27" id="q27" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(28)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q28" id="q28" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(29)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q29" id="q29" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input class="btn rounded-pill;" onclick="setQuestionButtonBackground(30)" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q30" id="q30" value="Q10"></center></td>
                    </tr>
                    
                </table>
                <h3 style="color:#a40475;margin-left:20px;"><u>Technical</u></h3>

                <table border="0px" >
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(31)" class="btn rounded-pill;"  style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q31" id="q31" value="Q1"></td>
                    <td><input  onclick="setQuestionButtonBackground(32)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q32" id="q32" value="Q2"></td>
                    <td><input  onclick="setQuestionButtonBackground(33)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q33" id="q33" value="Q3"></td>

                    </tr>   
                    <tr>
                    <td><input  onclick="setQuestionButtonBackground(34)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q34" id="q34" value="Q4"></td>
                    <td><input onclick="setQuestionButtonBackground(35)"class="btn rounded-pill;"style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q35" id="q35" value="Q5"></td>
                    <td><input onclick="setQuestionButtonBackground(36)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q36" id="q36" value="Q6"></td>

                    </tr>
                    <tr>
                    <td><input onclick="setQuestionButtonBackground(37)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q37" id="q37" value="Q7"></td>
                    <td><input onclick="setQuestionButtonBackground(38)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q38" id="q38" value="Q8"></td>
                    <td><input onclick="setQuestionButtonBackground(39)"class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="q39" id="q39" value="Q9"></td>

                    </tr>
                    <tr>
                    <td colspan="3"><center><input onclick="setQuestionButtonBackground(40)" class="btn rounded-pill;" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="410" id="q40" value="Q10"></center></td>
                    </tr>
</table>
               
    
</div>
</div>
<div class="row p-0 m-0">
<div class="col-xl-1 col-lg-1 col-md-1 col-1"></div>
<div class="col-xl-3 col-lg-3 col-md-3 col-3">
<table border="0px" >
                    <tr>
                    <td><center><input style="font-weight:bold;"onclick="setQuestionButtonBackground(previousid)" class="btn btn-warning  ms-5 mt-5" type="button" name="save2" id="save2" value="<<Previous"></center></td>
                    </tr> 
</table> 
</div>
<div class="col-xl-3 col-lg-3 col-md-3 col-3">
<table border="0px" >
                    <tr>
                    <td colspan="3"><center><input style="font-weight:bold;" class="btn btn-warning mt-5" onclick="setQuestionButtonBackground(nextid)" type="button" name="save" id="save" value="Next>>"></center></td>
                    </tr> 
</table> 
</div>
<div class="col-xl-1 col-lg-1 col-md-1 col-1"></div>

<div class="col-xl-4 col-lg-4 col-md-4 col-4 mt-4">

                <table border="0px" >
                    <tr>
                    <th style="padding:15px;color: #2c2de0;">Answered</th>
                    <th style="padding:15px;color: #2c2de0;">Viewed</th>
                    <th style="padding:15px;color: #2c2de0;">Not viewed</th>
   </tr>
<tr>
   <td style="padding:15px;"><input class="styled-button" style="background-color:green;color:white;font-weight:bold;" type="button" name="cans" id="cans" value=""></td>
   <td style="padding:15px;"><input class="styled-button" style="background-color:purple;color:white;font-weight:bold;" type="button" name="cvi" id="cvi" value=""></td>               
   <td style="padding:15px;"><input class="styled-button" style="background-color:#cfe2ff;color:black;font-weight:bold;" type="button" name="cnv" id="cnv" value=""></td>
</tr>
</table>
    
</div>


</div>
<div class="row p-0 m-0">
<div class="col-xl-10 col-lg-10 col-md-10 col-10"></div>
<div class="col-xl-2 col-lg-2 col-md-2 col-2">
<input onclick="submitalert()" style="margin-left:100px;margin-top:220px;font-weight:bold;" class="btn btn-success  rounded-pill mt-5 " type="button" name="submit" id="submit" value="Submit->">                 
</div>
</div>
    <script>
      
    document.addEventListener('click', () => {
            const element = document.documentElement;

            // Check if fullscreen is allowed
            if (element.requestFullscreen || element.mozRequestFullScreen || element.webkitRequestFullscreen || element.msRequestFullscreen) {
                // Use a user gesture to request fullscreen
                element.requestFullscreen = element.requestFullscreen || element.mozRequestFullScreen || element.webkitRequestFullscreen || element.msRequestFullscreen;
                element.requestFullscreen();

                // Exit fullscreen after a delay of 15 minutes (900,000 milliseconds)
                setTimeout(() => {
                    document.exitFullscreen();
                }, 900000);
            } else {
                console.error('Fullscreen not supported');
            }
        });

        document.addEventListener('keydown', (event) => {
            const element = document.documentElement;

            if (event.key === 'Escape' && document.fullscreenElement) {
                // Prevent default behavior to disable exiting fullscreen using the "Esc" key
                event.preventDefault();

                // Exit fullscreen after a delay of 15 minutes (900,000 milliseconds)
                setTimeout(() => {
                    document.exitFullscreen();
                }, 900000);
            }
        });

        let exitFullscreenTimeout; // Declare exitFullscreenTimeout

        // ... (existing code)

        document.addEventListener('click', () => {
            if (document.fullscreenElement) {
                clearTimeout(exitFullscreenTimeout);
            }
        });




var countdownTime = 3600;
var sweetAlertShown = false; // Flag to track if SweetAlert has been shown

function updateTimer() {
    var hours = Math.floor(countdownTime / 3600);
    var minutes = Math.floor((countdownTime % 3600) / 60);
    var seconds = countdownTime % 60;

    document.getElementById('timer').innerHTML = formatTime(hours) + ':' + formatTime(minutes) + ':' + formatTime(seconds);

    if (countdownTime === 300 && !sweetAlertShown) {
        // Show SweetAlert only once
        sweetAlertShown = true;

        // Replace standard alert with SweetAlert
        Swal.fire({
            icon: 'warning',
            title: 'Time is running out!',
            text: 'You have 5 minutes remaining.',
        });
    } else if (countdownTime <= 0) {
        // Stop the countdown when time is up
        clearInterval(timerInterval);
    } else {
        countdownTime--;
    }
}

function formatTime(time) {
    return time < 10 ? '0' + time : time;
}

// Start the countdown and store the interval ID
var timerInterval = setInterval(updateTimer,1000);

let currentApId= 1; 
let nextid=1;
let preid=currentApId-1;
let previousid=currentApId-1;
let anscount=0;
let viewcount=0;
let ntviewcount=0;
let vvc=0;


$(document).ready(function () {
        
        setQuestionButtonBackground(currentApId);
});

function setQuestionButtonBackground(currentApId) {
    if(currentApId<=40){
    document.getElementById("q" + currentApId).style.background='purple';
    document.getElementById("q" + currentApId).style.color='white';
    viewcount++;
    fetchData1(currentApId);
    let g =radioanswer(); 
       
    saveAnswer(currentApId,g);    
    
   
    nextid=currentApId;
    nextid++; 
    preid=currentApId;  
    previousid=currentApId;
    previousid--;  
    
    document.querySelectorAll('input[type="radio"]').forEach(radio => {
        radio.checked = false;
    });
}else{
    

    fetchData1(currentApId);
    let g =radioanswer(); 
    saveAnswer(currentApId,g);    
    
    nextid=currentApId;
    nextid++; 
    preid=currentApId;  
    previousid=currentApId;
    previousid--;  
   
}
}
function radioanswer(g){
    const ansfield = document.getElementsByName("rad");

    for (let j = 0; j < ansfield.length; j++) {
        if (ansfield[j].checked) {
            g = ansfield[j].value;
            console.log(g);
    if(g!=""){
        document.getElementById("q" + preid).style.background='green';
        document.getElementById("q" + preid).style.color='white';
        anscount++;
        vvc=viewcount-anscount;
    }else if(g==""){
        document.getElementById("q" + preid).style.background='purple';
        document.getElementById("q" + preid).style.color='white';
        
    console.log(viewcount);

    }
    ntviewcount=40-(viewcount);
    
    $('#cans').val(anscount);
    $('#cvi').val(vvc);
    $('#cnv').val(ntviewcount);
        return g;
        }
    }
        
    
}


function fetchData1(currentApId) {
   
    let table = '';  
    if (currentApId== 1){
        document.getElementById('save2').style.display='none';
        document.getElementById('save').style.display='block';
        document.getElementById('examquestionsblock').style.display='block';

        aptitudesection(currentApId);

    }else if (currentApId > 1 && currentApId<= 10) {
        document.getElementById('save2').style.display='block';
        document.getElementById('save').style.display='block';
        document.getElementById('examquestionsblock').style.display='block';


        aptitudesection(currentApId);
        
    }else if(currentApId > 10 && currentApId<= 20) {
        document.getElementById('save2').style.display='block';
        document.getElementById('save').style.display='block';
        document.getElementById('examquestionsblock').style.display='block';

        reasoningsection(currentApId);
        
    }else if(currentApId > 20 && currentApId<= 30) {
       verbalsection(currentApId);
       document.getElementById('save2').style.display='block';
        document.getElementById('save').style.display='block';
        document.getElementById('examquestionsblock').style.display='block';

    }else if (currentApId> 30 && currentApId<= 40) {
        document.getElementById('save2').style.display='block';
        document.getElementById('save').style.display='block';
        document.getElementById('examquestionsblock').style.display='block';

       technicalsection(currentApId);
    }else if (currentApId== 41){
        document.getElementById('save2').style.display='block';
        document.getElementById('save').style.display='none';
        technicalsection(currentApId);
        document.getElementById('examquestionsblock').style.display='none';

    }
    

   
}
function aptitudesection(currentApId){
    table = 'aptitude';  
        $.ajax({
        url: 'examphppage.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, ap_id:currentApId},
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.ap_id);
                $('#name').val(data.ap_question);
                $('#a').val(data.apo_1);
                $('#b').val(data.apo_2);
                $('#c').val(data.apo_3);
                $('#d').val(data.apo_4);
            
                currentApId++;
                
                 
                
            } else {
                console.log('No more data found or invalid data format.');
            }
        },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
        }
    });
    }
function reasoningsection(currentApId){
        table = 'reasoning';  
        $.ajax({
        url: 'examphppage1.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, r_id: currentApId },
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.r_id);
                $('#name').val(data.re_question);
                $('#a').val(data.reo_1);
                $('#b').val(data.reo_2);
                $('#c').val(data.reo_3);
                $('#d').val(data.reo_4);
                
                currentApId++;

                
            } else {
                console.log('No more data found or invalid data format.');
            }
        },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
        }
    });
}
function verbalsection(currentApId){
    table = 'verbal';  
        $.ajax({
        url: 'examphppage2.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, v_id: currentApId },
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.v_id);
                $('#name').val(data.v_question);
                $('#a').val(data.vo_1);
                $('#b').val(data.vo_2);
                $('#c').val(data.vo_3);
                $('#d').val(data.vo_4);
                 currentApId++;
                
            } else {
                console.log('No more data found or invalid data format.');
            }
        },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
        }
    });
}
function technicalsection(currentApId){
    table = 'technical'; 
        $.ajax({
        url: 'examphppage3.php',
        type: 'POST',
        dataType: 'json',
        data: { table: table, t_id: currentApId },
        success: function (data) {
            if (data && Object.keys(data).length > 0) {
                // Update your HTML elements with the fetched data
                $('#num').val(data.t_id);
                $('#name').val(data.t_question);
                $('#a').val(data.t_1);
                $('#b').val(data.t_2);
                $('#c').val(data.t_3);
                $('#d').val(data.t_4);
                 currentApId++;
                
                
            } else {
                console.log('No more data found or invalid data format.');
            }
        },
        error: function (xhr, status, error) {
            console.log('Error:', status, error);
        }
    }); 
}
function saveAnswer(currentApId, g) {
    console.log(currentApId);
    console.log(g);

    // Check if the answer is not null or undefined
    if (g != null && g !== undefined) {
        $.ajax({
            url: 'examsaveanswer.php',
            type: 'POST',
            data: { question_id: currentApId - 1, answer_id: g },
            success: function (response) {
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.error('Error saving answer:', status, error);
            }
        });
    } else {
        console.error('Answer is null or undefined');
    }
}

function submitalert() {
    // Show SweetAlert for confirmation
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to submit ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, proceed!'
    }).then((result) => {
        if (result.isConfirmed) {
            // If the user clicks 'Yes', redirect to examover.php
            window.location.href = 'examcompletedpage.php';
}
});
}





    </script>
    </form>
</body>

</html>

<!DOCTYPE html> 
<?php
require_once "examconfig.php";
session_start();
$main_id1 =$_SESSION["main_id"] ;
?>
<html lang="en"> 
	
<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0"> 
	<title>Stop Watch</title> 
	<link rel="stylesheet" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head> 

<body> 
    <form action="" method="POST">
        <div class="row p-0 m-0">
    <div class="col-xl-4 col-lg-4"></div>
	<div class="col-xl-4 col-lg-4 mt-5"> 
		<h1 style="color:rgb(207, 122, 10);">Stop Watch</h1> 
			<span style="font-size: 30px;"id="hr">00</span> 
			<span style="font-size: 20px;">Hr</span> 
			<span style="font-size: 30px;"id="min">00</span> 
			<span style="font-size: 20px;">Min</span> 
			<span style="font-size: 30px;"id="sec">00</span> 
			<span style="font-size: 20px;">Sec</span> </br> 
	</div> 
        </div>


    <script>
        let hour = 1;
        let minute = 0;
        let second = 0;
        let timer = true;

        document.getElementById('hr').innerHTML = formatTime(hour);
        document.getElementById('min').innerHTML = formatTime(minute);
        document.getElementById('sec').innerHTML = formatTime(second);

        function formatTime(time) {
            return time < 10 ? "0" + time : time;
        }

        function stopwatch() {
            if (timer) {
                if (hour > 0 || minute > 0 || second > 0) {
                    if (second > 0) {
                        second--;
                    } else if (minute > 0) {
                        minute--;
                        second = 59;
                    } else {
                        hour--;
                        minute = 59;
                        second = 59;
                    }

                    document.getElementById('hr').innerHTML = formatTime(hour);
                    document.getElementById('min').innerHTML = formatTime(minute);
                    document.getElementById('sec').innerHTML = formatTime(second);

                    setTimeout(stopwatch, 1000); // Update every second
                } else {
                    timer = false; // Stop the timer
                }
            }
        }

        stopwatch(); // Start the timer
    </script>
</body>
</html>

   

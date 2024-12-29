<?php
require_once "examconfig.php";
 header( "refresh:10; url=logout.php" ); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Page 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Raleway:ital,wght@1,700&family=Sansita&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #d7d7d7;
            background-image: url('images/keyboard-coffee-smartphone-notebook-color-background-top-view_1286-785.avif');
            background-repeat: no-repeat;
            background-size: cover; 
            height: 100vh; /* Use full height of the viewport */
            margin: 0;
            margin-top:10px;
            font-family: 'Raleway', sans-serif;
            color: white;
        }

        .logo {
            font-family: 'Calistoga', serif;
            font-size: 2rem;
            color: white;
        }

        .message {
            margin-top:100px;
            text-align: center;
            font-size: 2rem;
        }

        .logout-btn {
            margin-top: 2rem;
            background-color: white;
            font-weight: bold;
            color:black;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <div class="row ">
            <div class="col-12">
            <h1><span style="font-family: 'Calistoga', serif;color:white;">V<span style="font-family: 'Calistoga', serif;color:black;">UL<span style="font-family: 'Calistoga', serif;color:white;">CAN<span style="font-family: 'Calistoga', serif;color:black;">TECHS</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 message">
                Your exam completed successfully... <i class="bi bi-hand-thumbs-up-fill"></i><br><br>
                Thank you <i class="bi bi-emoji-smile-fill"></i>!
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <a class="btn btn-primary logout-btn" href="logout.php">Logout</a>
            </div>
        </div>
    </div>

</body>
</html>


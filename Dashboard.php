<?php

    $con = mysqli_connect("localhost", "root", "", "factory");
    session_start();
 ?>
 
 <html>
     <head>
         <title>User's Dashboard</title>
     </head>
     <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <style>
        body {background-color: mediumspringgreen;}
        h1 {
            font-family: 'Quicksand', sans-serif;
            color:red;
        }
        h2 {
            font-family: 'arial', sans-serif;
            width: 100%; 
       
            color:crimson;
        } 
        
    </style>

     <body>
        <div id = 'd1'>
            <h1>Welcome Your given data as follows</h1>
            <h2>First name:<?php echo($_SESSION['factory']['first_name']."&nbsp"); ?></h2>
            <h2>Mid name:<?php echo($_SESSION['factory']['mid_name']."&nbsp"); ?></h2>
            <h2>Last name:<?php echo($_SESSION['factory']['last_name']."&nbsp"); ?></h2>
            <h2>Father name:<?php echo($_SESSION['factory']['father_name']."&nbsp"); ?></h2>
            <h2>Email:<?php echo($_SESSION['factory']['email']."&nbsp"); ?></h2>
            <h2>Gender:<?php echo($_SESSION['factory']['gender']."&nbsp"); ?></h2>
            <h2>Marital sattus:<?php echo($_SESSION['factory']['marital_status']."&nbsp"); ?></h2>
            <h2>Pan no:<?php echo($_SESSION['factory']['pan_no']."&nbsp"); ?></h2>
            <h2>Aadhar no::<?php echo($_SESSION['factory']['aadhar_no']."&nbsp"); ?></h2>
            <h2>Address:<?php echo($_SESSION['factory']['address']."&nbsp"); ?></h2>
            <h2>Date of Birth:<?php echo($_SESSION['factory']['dob']."&nbsp"); ?></h2>
            <h2>Join Date:<?php echo($_SESSION['factory']['join_date']."&nbsp"); ?></h2>
        </div>

        
     </body>
</html>
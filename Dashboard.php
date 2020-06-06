<?php

    $con = mysqli_connect("localhost", "root", "", "stackhack");
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
            <h2>Full name:<?php echo($_SESSION['factory']['full_name']."&nbsp"); ?></h2>
            <h2>Email:<?php echo($_SESSION['factory']['email']."&nbsp"); ?></h2>
            <h2>Registration type:<?php echo($_SESSION['factory']['regtype']."&nbsp"); ?></h2>
            <h2>Registration numbder:<?php echo($_SESSION['factory']['regno']."&nbsp"); ?></h2>
            <h2>Tickets number:<?php echo($_SESSION['factory']['tickets']."&nbsp"); ?></h2>
        </div>

        <a href="updatepassword.php">If you want you can update your password</a>
     </body>
</html>
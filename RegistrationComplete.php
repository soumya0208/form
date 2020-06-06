<?php

    if($_GET['msg'] == "done")
    {   
?>

<html>
    <head>
        <title>Registration Acknowledgement</title>
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

        <style>
            #d1
            {
                height: 120px;
                width: auto;
                background-color: green;
                color: white;
                font-family: 'Quicksand', sans-serif;
                padding-top: 20px;
                border-radius: 20px;
            }
            #d2
            {
                height: 200px;
                width: auto;
                background-color: red;
                color: white;
                font-family: 'Quicksand', sans-serif;
                padding-top: 20px;
                border-radius: 20px;
            }
        </style>
    </head>

    <body>
        <div>
            <div id = "d1" align = "center">
                <h1> Registration Completed Successfully</h1>
				<a href="Login.html">Go back to login page </a>
            </div>

    <?php
        }
        else
        {
    ?>            
    <div id = "d2" align = "center">
        <h1> Registration Failed </h1>
    </div>
    <?php
        }
    ?>
        </div>
    </body>
</html>
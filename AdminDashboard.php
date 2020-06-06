<html>
    <head>
        <title> Admin's Dashboard</title>
        <style>
            #d0
            {
                height: 50px;
                width: auto;
                background-color: crimson;
                color: wheat;
                text-align: center;
            }
            #d1
            {
                height: 25px;
                width: auto;
                background-color: blue;
                padding-top: 10px;
                padding-left: 10px;
                margin-top: 10px;
            }
        </style>
    </head>

    <body>
        <div id = "d0">
            <h1>
                Partcipants List
            </h1>
        </div>
        <?php
            $con = mysqli_connect("localhost", "root", "", "stackhack");
            $last = mysqli_insert_id($con);

            for($i = 0; $i <= $last; $i++)
            {
        ?>
                <div id = "d1">
        <?php
                $s = mysqli_query($con, "select * from participants where id = '$i'");
                $r = mysqli_fetch_array($s);
                echo ($i + 1)."  ".$r['full_name']."\t".$r['email'];                
                            
        ?>
                </div>
        <?php
            }
        ?>
        
    </body>

</html>
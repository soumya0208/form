<?php
    $con = mysqli_connect("localhost", "root", "", "stackhack");
    session_start();
    
    

    if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['mobno']) && isset($_POST['pwd']) &&  isset($_POST['tickets']) && isset($_POST['idimage']) && isset($_POST['regtype']) && isset($_POST['gdr']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $mobno = $_POST['mobno'];
        $pwd   = $_POST['pwd'];
        $ticket = $_POST['tickets'];
        $regtype = $_POST['regtype'];
        $gdr = $_POST['gdr'];


                                    //Generating the Registration No.

        $reg = mysqli_insert_id($con);
        $reg = $reg."";              //Converting it to String.
        while(strlen($reg) <= 4)
        {
            $reg = "0".$reg;
        }
        $reg = "REG".$reg;
                                    //Getting the ID Image File info. 

        //$idimage = $_FILES['idimage'];
        $imageName = $_FILES['idimage']['name'];
        $imageTmpName = $_FILES['idimage']['tmp_name'];
        $imageSize = $_FILES['idimage']['size'];
        $imageType = $_FILES['idimage']['type'];
        $imageError = $_FILES['idimage']['error'];
        $imageExt = explode(".", $imageName);
        $imageExt = strtolower($imageExt);
        $error = 0;
        $allowed = array('.jpg', '.jpeg', '.png');
        echo($imageExt);
        

        if(in_array($imageExt, $allowed))
        {
            if($imageError === 0)
            {
                if($imageSize < 1000000)
                {
                    $imageNewName = $reg.".".$imageExt;
                    $imageDest = 'uploads\\'.$imageNewName;
                    move_uploaded_file($imageTmpName, $imageDest);
                }
                else
                    $error = 1;
            }
            else
                $error = 2;
        }
        else
            $error = 3;

        

        $s = mysqli_query($con, "insert into participants(full_name, mobno, email, pwd, idimage, regtype, tickets, regno) values('$fname', '$mobno', '$email', '$pwd', '$imageNewName', '$regtype', '$ticket', '$reg')");
        
        if($s > 0 && $error == 0)
        {
            $r = mysqli_query($con, "select * from participants where email = '$email'");
            $_SESSION['stackhack'] = $r;
            header("location:RegistrationSummary.php?msg=done");
        }
        //else
            //header("location:RegistrationSummary.php?err=$error");
    }

?>
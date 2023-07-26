<?php 
    if(!isset($_POST['email'])) {
        echo '<input class="text-center" name="email" type="email" placeholder="YOUR EMAIL ADDRESS" />';
        echo '<button type="submit">SUBMIT</button>';
    }

    else {

        $user = 'root';
        $host = 'localhost';
        $passwd = '';
        $db = 'magnetic';

        $email = $_POST['email'];

        $connection = mysqli_connect($host,$user,$passwd,$db);

        if($connection) {
            //check if email not exists
            $sql1 = "SELECT email FROM emails WHERE email = '$email'";
            $query = mysqli_query($connection,$sql1);

            if(mysqli_num_rows($query) < 1) {

                $sql2 = "INSERT INTO emails VALUES(NULL,'$email')";
                
                if(mysqli_query($connection,$sql2)) {
                    echo "<h4>Email successfull added to our newsletter !!!</h4>";
                }
                else {
                    echo "<h4>Error !!! We can't add your email now</h4>";
                }
         
            }
            else {
                echo "<h4>We already have your email !!!</h4>";
            }
        }
    }
        
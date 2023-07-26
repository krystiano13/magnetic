<?php 
    if(!isset($_POST['email'])) {
        echo '<input class="text-center" name="email" type="email" placeholder="YOUR EMAIL ADDRESS" />';
        echo '<button type="submit">SUBMIT</button>';
    }

    else {
        echo "<h4>Email successfull added to our newsletter !!!</h4>";
    }
        
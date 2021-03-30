<!DOCTYPE html>
<html>
    <head>
        <title>My Pizza Project</title>
        <!-- Tyler Moorhead  -->
        <!-- Student ID: 041258350  -->
        <!-- Email: t.moorhead350@student.nu.edu  -->
        <!-- Date: 20210321  -->
        <!-- CSC680  -->
        <!-- Project 1  -->
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <header>
            <img src="My_Pizza_Website.png" alt="Pizza Website"/>
            <hr>
        </header>
        
        <nav>
            <a href="Index.php">Main</a> |
            <a href="Food.html">Menu</a> | 
            <a href="Order.html">Order</a> |    
            <a href="Specials.html">Specials</a> |  
            <a href="Login.php">Login</a>
            <hr>
        </nav>
        
        
        
        <main>
            <p>Welcome to My Pizza Project </p>
            
             <hr>
            
            <p>Welcome to the newest Pizza restaurant serving Southern California </p>
            
            <?php

            $valid_passwords = array ("Mario" => "testing");
            $valid_users = array_keys($valid_passwords);

            $user = $_SERVER['PHP_AUTH_USER'];
            $pass = $_SERVER['PHP_AUTH_PW'];

            $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

            if (!$validated) {
              header('WWW-Authenticate: Basic realm="My Realm"');
              header('HTTP/1.0 401 Unauthorized');
              die ("Not authorized");
            }

            // If arrives here, is a valid user.
            echo "<p>Welcome $user.</p>";
            echo "<p>Congratulations, you have logged into My Pizza.</p>";

            ?>
           
            <img src="Pizza_Pep_Large.png" alt="Pizza Image"/>
             <hr>

    

        </main>
    
        <footer>

        </footer>
        
        
    </body>
    
</html>


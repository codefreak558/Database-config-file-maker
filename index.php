<!doctype html>
<html>
    
    <head>

        <meta charset="utf-8">
        <title>Database Info File Maker</title>

    </head>

    <body>
        
        <!-- This is the form for the database information -->
        <form method="post" action="dbconfmaker.php">
            <input required type="text" name="dbhost" placeholder="Database Host"><br>
            <input required type="text" name="dbname" placeholder="Database Name"><br>
            <input required type="text" name="dbuser" placeholder="Database Username"><br>
            <input required type="password" name="dbpasswd" placeholder="Database Password"><br>
            <input type="submit" value="submit">
        </form>
        
        <?php
        if($_SERVER["REQUEST METHOD"] == "POST"){
        $host = test_input($_POST["dbhost"]);
        $name = test_input($_POST["dbname"]);
        $user = test_input($_POST["dbuser"]);
        $passwd = test_input($_POST["dbpasswd"]);
        
        }
            
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
        ?>

    </body>
    
</html>
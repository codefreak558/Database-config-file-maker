<!doctype html>
<html>
    
    <head>

        <meta charset="utf-8">
        <title>Database Config File Maker</title>

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
        
    </body>
    
</html>

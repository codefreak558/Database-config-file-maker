<!doctype html>
<html>
    
    <head>

        <meta charset="utf-8">
        <title>Database Info File Maker</title>
        
        <!--Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!--Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <div class="container"><!--DIV START-->
            <form method="post" action="dbconfmaker.php"> <!--This is the form for the database information-->
                <div class="form-row"><!--ROW DIV START-->
                    <div class="form-group col-md-6">
                        <label for="dbhost">Database Host</label>
                        <input required type="text" class="form-control" name="dbhost">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dbname">Database Name</label>
                        <input required type="text" class="form-control" name="dbname">
                    </div>
                </div><!--ROW DIV END-->
                <div class="form-group">
                    <label for="dbuser">Database Username</label>
                    <input required type="text" class="form-control" name="dbuser">
                </div>
                <div class="form-group">
                    <label for="dbpasswd">Database Password</label>
                    <input required type="password" class="form-control" name="dbpasswd">
                </div>
                    <input class="btn btn-primary" type="submit" value="submit">
                
            </form>
        </div><!--DIV END-->
    </body>
    
</html>
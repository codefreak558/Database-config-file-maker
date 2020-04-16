<?php
if("dbconfig.php" == true){ //Checks if dbconfig.php exists if it does it echos that the file already exists
    echo "File already exists";
} else {
    $dbfile = fopen("dbconfig.php", "w"); //This creates the dbconfig.php file

    $txt = "<?php\n";
    fwrite($dbfile, $txt);
    $txt = "$"."dbhost = '".$_POST['dbhost']."';\n"; // Takes the input from the Host input field and puts it in a variable
    fwrite($dbfile, $txt);
    $txt = "$"."dbname = '".$_POST['dbname']."';\n";// Takes the input from the Name input field and puts it in a variable
    fwrite($dbfile, $txt);
    $txt = "$"."dbuser = '".$_POST['dbuser']."';\n";// Takes the input from the Username input field and puts it in a variable
    fwrite($dbfile, $txt);
    $txt = "$"."dbpasswd = '".$_POST['dbpasswd']."';\n";// Takes the input from the Password input field and puts it in a variable
    fwrite($dbfile, $txt);
    $txt = "?>";
    fwrite($dbfile, $txt);
    echo "File created";
    fclose($dbfile);
}
?>
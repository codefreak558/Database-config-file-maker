<?php
if("dbconfig.php" == true){ //Checks if dbconfig.php exists if it does it echos that the file already exists
    echo "File already exists";
} else {
    $dbfile = fopen("dbconfig.php", "w"); //This creates the dbconfig.php file

    $txt = "<?php\n";
    fwrite($dbfile, $txt);
    $txt = "$"."dbhost = '".$_POST['dbhost']."';\n";
    fwrite($dbfile, $txt);
    $txt = "$"."dbname = '".$_POST['dbname']."';\n";
    fwrite($dbfile, $txt);
    $txt = "$"."dbuser = '".$_POST['dbuser']."';\n";
    fwrite($dbfile, $txt);
    $txt = "$"."dbpasswd = '".$_POST['dbpasswd']."';\n";
    fwrite($dbfile, $txt);
    $txt = "?>";
    fwrite($dbfile, $txt);
    echo "File created";
    fclose($dbfile);
}
?>
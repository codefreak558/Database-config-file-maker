<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
$host = test_input($_POST["dbhost"]);
$name = test_input($_POST["dbname"]);
$user = test_input($_POST["dbuser"]);
$passwd = test_input($_POST["dbpasswd"]);

}

function test_input($data) { // Gets strips all tags from the input
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(file_exists("dbconfig.php")){ // Checks if dbconfig.php exists if it does it echos that the file already exists
    echo "File already exists";
    } else {
        $dbfile = fopen("dbconfig.php", "w"); // This creates the dbconfig.php file

        $txt = "<?php\n";
        fwrite($dbfile, $txt);
        $txt = "$"."dbhost = '".$host."';\n"; // Takes the input from the Host input field and puts it in a variable
        fwrite($dbfile, $txt);
        $txt = "$"."dbname = '".$name."';\n";// Takes the input from the Name input field and puts it in a variable
        fwrite($dbfile, $txt);
        $txt = "$"."dbuser = '".$user."';\n";// Takes the input from the Username input field and puts it in a variable
        fwrite($dbfile, $txt);
        $txt = "$"."dbpasswd = '".$passwd."';\n";// Takes the input from the Password input field and puts it in a variable
        fwrite($dbfile, $txt);
        $txt = "?>";
        fwrite($dbfile, $txt);
        echo "File created";
        fclose($dbfile);
        }
    }
?>
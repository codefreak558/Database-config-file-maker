# Database-config-file-maker
This repository has two pages the index.php page and the dbconfmaker.php

## Index Page
The index page contains the form needed to create the dbconfig.php file. There are four input boxes, they are for the database host, the database name, database username and the database password.
If you want the dbconfmaker.php file in a diffrent folder you will need to change the action of the form page to include the new folder for example:

This is if the dbconfmaker.php is in the same folder `<form method="post" action="dbconfmaker.php">`

This is if the dbconfmaker.php is in a subfolder `<form method="post" action="subfoldername\dbconfmaker.php">`

## DBCONFMAKER page
The dbconfmaker page is where the file is created with the data from the index page. 
This page does a check to see if the file alraedy exists and if it does it wont run the scrpit that creates the file it will display on screen that the file already exists. If the the file doesn't exist it will create the dbconfig and will store the data in the following variables
- Database host - `$dbhost`
- Database name - `$dbname`
- Database username - `$dbuser`
- Database password - `$dbpasswd`

Once the you see the page say that **File Created** there will be a new file in the same folder as the dbconfmaker.php saved as **dbconfig.php**

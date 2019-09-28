<?php

// Initialise the connection parameters  
$ftp_server = "localhost";
$ftp_username = "dk7";
$ftp_password = "";

// Create an FTP connection  
$conn = ftp_connect($ftp_server);

// Login to FTP account using username and password  
$login = ftp_login($conn, $ftp_username, $ftp_password);

// Get the contents of the current directory  
// Change the second parameter if wanting a subdirectories contents  
$files = ftp_nlist($conn, ".");

// Loop through $files  
foreach ($files as $file) {

    // Do something with the file here.   

    // For now we'll echo the filenames in a list  
    echo $file . "<br />";

}  

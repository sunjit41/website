<?php

$headers = getallheaders();
//var_dump($headers);
if(!isset($headers['X-API-Key']))
{
        // If the key is missing or incorrect, deny access
        $_SESSION['errornum'] = "403 - Access denied";
        $_SESSION['sunerror'] = "Authentication failed";
        require "views/error404.php";

}
else
{
    include 'classes/database.php';

    $db = New MyDatabase();
    $objLinks = $db->getKeralaLinks();
    echo $objLinks;
}


?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_SERVER["SERVER_ADDR"]=="localhost")
{
    define("SQL_HOST", "localhost");
    define("SQL_DBNAME_TEST", "a3863795_test");
    define("SQL_USERNAME_TEST", "a3863795_test");
    define("SQL_PASSWORD_TEST", "Os3lenihosi");
}
else
{
    define("SQL_HOST", "mysql5.000webhost.com");
    define("SQL_DBNAME_TEST", "a3863795_test");
    define("SQL_USERNAME_TEST", "a3863795_test");
    define("SQL_PASSWORD_TEST", "Os3lenihosi");    
}


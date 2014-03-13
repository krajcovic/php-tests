<?php

include ("db_config.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$isShow = true;
if (!empty($_POST)) {
    if (strlen($_POST["psc"]) <> 5 || !is_numeric($_POST["psc"])) {
        echo "PSČ must be pentatnd number.";
    } else {
        $isShow = false;

        mysql_connect(SQL_HOST, SQL_USERNAME_TEST, SQL_PASSWORD_TEST) or die("Cannot connect to MySQL: " . mysql_error());
        mysql_select_db(SQL_DBNAME_TEST) or die("Not existing database: " . mysql_error());

        $result = mysql_query("select * from psc where psc=" . $_POST["psc"]);
        //$result = mysql_query("select * from psc");
        $rowsCount = mysql_num_rows($result);
        if ($rowsCount == 0) {
            echo "PSČ " . $_POST["psc"] . " doesn't exist.";
        } else {
            echo "PSČ " . $_POST["psc"] . " found in $rowsCount villagies:<br>";
            while ($item = mysql_fetch_array($result)) {
                echo $item["posta"] . "<br>\n";
            }
            //endwhile;
        }

        mysql_close();
    }
}

if ($isShow) {
    echo '<form method="post" action="' . $_SERVER["PHP_SELF"] . '">PSČ: <input name="psc" value="' . $_POST["psc"] . '"><input type="Submit" name="odesli"></form>';
}





<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--<?php 
        phpinfo(); 
        ?><br>-->

        <?php

        function JeNedele($den = "now") {
            return (date("w", strtotime($den)) == 0);
        }
        
        if(JeNedele("2014-02-16")) echo "Je nedele"; else echo "Neni nedele";
        echo "<BR>";
        
        if(JeNedele()) echo "Je nedele"; else echo "Neni nedele";
        echo "<BR>";
        ?>

        <?php
        define("BROWSER", "Firefox 1.0");
        echo "Vas browser je " . BROWSER . "<BR>";
        ?>

        <?php
        $dnesnidatum = Date("r");
        echo $dnesnidatum . "<BR>";
        ?>

        <?php
        $fronta[] = "Petr";
        $fronta[] = "Pavel";
        $fronta[] = "Maruška";
        $fronta[] = "Eva";
        $fronta[] = "LinuxSoft tým";

        print_r($fronta);
        ?>


        <?php
        // logicky typ
        $mam_malo_penez = TRUE;
        // celociselny typ
        $plat = 10000;
        $disketa = 3.5;

        echo $mam_malo_penez . "<BR>";
        ?>

        Ja jsem obycejna stranka. A nic neumim.
        <br>
        Vim ze je <?echo Date("G:i")?>

        <?php
        echo "Prvni radek<BR>";
        echo "Druhy radek<BR>";

        // Viceradkovy retezec
        echo "Tohle bude prvni radek <BR>tohle bude druhy radek<Br>tohle dame nakonec<BR>";
        echo "Klidne si spojim uvod" . "se zaverem<BR>";
        echo "Klidne si spojim uvod" + "se zaverem<BR>";
        ?>        
    </body>
</html>

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
        <?php

        function JePrechodny($year) {
            //return (($rok % 4 == 0) && ($rok % 100 <> 0 || $rok % 400 == 0));
            return (boolean) date("L", mktime(0, 0, 0, 1, 1, $year));
        }

        function PocetDnu($month, $year) {
            return cal_days_in_month(CAL_GREGORIAN, $month, $year);
        }

        function PrvniDen($mesic, $rok) {
            $anglickeporadi = date("w", mktime(0, 0, 0, $mesic, 1, $rok));
            return ($anglickeporadi == 0) ? 7 : $anglickeporadi;
        }

        $sloupcu = date("W", mktime(0, 0, 0, $mesic, $PocetDnu - 7, $rok)) - date("W", mktime(0, 0, 0, $mesic, 1 + 7, $rok)) + 4;

        function Bunka($radek, $sloupec, $PrvniDen, $PocetDnu) {
            $dny = Array(1 => "Po", "Út", "St", "Čt", "Pá", "So", "Ne");
            if ($sloupec == 1)
                return $dny[$radek];
            $chcivratit = ($sloupec - 2) * 7 + $radek - $PrvniDen + 1;
            if ($chcivratit < 1 || $chcivratit > $PocetDnu)
                return "&nbsp;";
            else
                return $chcivratit;
        }

        function Kalendar($mesic, $rok) {
            $mesice = Array(1 => "leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec");
            //kontroly
            if (!is_numeric($mesic))
                return "Měsíc musí být číslo!";
            if (!is_numeric($rok))
                return "Rok musí být číslo!";
            if ($mesic < 1 || $mesic > 12)
                return "Měsíc musí být číslo od 1 do 12";
            if ($rok < 1980 || $rok > 2100)
                return "Rok musí být číslo od 1980 do 2050";
            // zjištění počtu sloupců
            $PocetDnu = PocetDnu($mesic, $rok);
            $PrvniDen = PrvniDen($mesic, $rok);
            $sloupcu = date("W", mktime(0, 0, 0, $mesic, $PocetDnu - 7, $rok)) - date("W", mktime(0, 0, 0, $mesic, 1 + 7, $rok)) + 4;
            // vlastní kód
            echo "<TABLE border=\"1\" style=\"border-collapse: collapse\" width=\"", $sloupcu * 30, "\">";
            echo "<TR><TD colspan=$sloupcu width=\"", $sloupcu * 30, "\" align=\"center\">" . $mesice[$mesic] . "&nbsp;" . $rok . "</TD></TR>\n";
            for ($radek = 1; $radek <= 7; $radek++) {
                echo "<TR align=\"center\">";
                for ($sloupec = 1; $sloupec <= $sloupcu; $sloupec++)
                    echo "<TD width=\"30\">" . Bunka($radek, $sloupec, $PrvniDen, $PocetDnu) . "</TD>";
                echo "</TR>\n";
            }
            echo "</TABLE>";
        }
        
        echo Kalendar(7, 2051);
        
        ?>
    </body>
</html>

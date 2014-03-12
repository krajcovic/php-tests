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
        <h1>Developer - tester page's.</h1>
        <p>You haven't any purpose by in here.</p>
        <?php
            $folder = dir(".");
            echo "<table>";
            while($file = $folder->read()) {
                if($file == "." || $file =="..") {
                    continue;
                }
                
                echo '<tr><a href="'.basename($file).'">'.basename($file).'</a></tr><br>';
            }
            echo "</table";
        ?>
    </body>
</html>

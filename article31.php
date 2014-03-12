<?php
if ($_REQUEST["odeslano"] == 1):
    unlink("./31/hloupost.txt");
    // kontroly... 
    if (move_uploaded_file($_FILES['hloupost']['tmp_name'], "./31/hloupost.txt")) {
        //zpracování 
    };
else:
    ?> 
    Nahrání souboru na server 
    <form method="POST" ENCTYPE="multipart/form-data" action="<?echo $_SERVER["PHP_SELF"]?>"> 
          <table border="1" > 
            <tr> 
                <td>Textový soubor</td> 
                <td> 
                    <input type="HIDDEN" name="MAX_FILE_SIZE" VALUE=300> 
                    <input type="file" name="hloupost" ACCEPT="text/*"> 
                </td> 
                <td>(max. 300 bajtů)</td> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <input type="hidden" name="odeslano" value="1"> 
                    <p align="center"><input type="submit" value="Odeslat"></td> 
            </tr> 
        </table> 
    </form> 
<?php
endif;
?> 


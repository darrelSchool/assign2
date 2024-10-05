<?php

function ClassAutoload($ClassName){
   $directories = ["structure", "includes"];

   foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir .  DIRECTORY_SEPARATOR . $ClassName . '.php';
        
        if(file_exists($FileName) AND is_readable($FileName)){
         require $FileName;
        }
   }
}
spl_autoload_register('ClassAutoload');

// Creating instances of all classes
    $ObjLayouts = new layouts();
    $ObjForms = new forms();
    $ObjContents = new contents();
    $DbConn = new dbConnection("mysql", "localhost", 3306, "iap", "iap@2024", "darrel_157769");
?>

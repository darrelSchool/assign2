<?php
require "load.php";
$content = $DbConn->get_user_content();
$ObjLayouts->head("Mars form");
$ObjForms->sign_up_form("./verify_email.php");
$ObjContents->show_user_content($content);
$ObjLayouts->foot();
?>

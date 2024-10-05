<?php
require "load.php";

if(isset($_POST["name"])){
  $DbConn->add_request($_POST["name"], $_POST["dates"], $_POST[ "email" ], $_POST["p_no"], $_POST["dates_no"], $_POST["desc"]);
  header("Location: ");
  exit;
}

$ObjLayouts->head("Mars form");
$ObjForms->sign_up_form($_SERVER["PHP_SELF"]);
$ObjLayouts->foot();
?>

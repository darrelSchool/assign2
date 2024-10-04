<?php
class layouts{

  public function header($title){?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
      </head>
      <body>
    <?php 
  }
}
?>

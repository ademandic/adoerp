<?php
global $login, $loginInfo;
extract($generalSettings[0]);
?>
<!doctype html>
<html lang="tr">
  <head>
    <title><?=strtoupper($sitename)?> <?=$title?(' | ' . $title):(null)?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=URL_PREFIX?>/css/style.css">
    <link rel="stylesheet" href="<?=URL_PREFIX?>/css/jquery.scrollbar.css">
    <link rel="stylesheet" href="<?=URL_PREFIX?>/css/datatables.min.css">
    <link rel="stylesheet" href="<?=URL_PREFIX?>/js/prettify/prettify.css">

    <script src="<?=URL_PREFIX?>/js/jquery.js"></script>
    <script src="<?=URL_PREFIX?>/js/jquery.scrollbar.min.js"></script>
    <script src="<?=URL_PREFIX?>/js/jquery.scrollbar.min.js"></script>
    <script src="<?=URL_PREFIX?>/js/prettify/prettify.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=URL_PREFIX?>/js/site.js"></script>
    <script type="text/javascript" src="<?=URL_PREFIX?>/js/datatables.min.js"></script>
    
  </head>
  <body>
  <?php
  if($login)
    require_once(__DIR__ . '/master.php');
  ?>
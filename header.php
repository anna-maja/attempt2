<!-- 
här ligger headern
title == en konstant. Används även till h1.
 -->
 <?php
//visa varningar och felmeddelanden
ini_set("display_errors", 1);
?>
<?php
    define("PAGE_INDEX", "Shop 'til you Drop");  /* ändrar titeln i fliken. */
    define("PAGE_FORM", "Shop - Order"); 
    define("PAGE_EXIT", "Shop - Exit"); 
    define("PAGE_MAIL", "Shop - Confirm and Mail"); 
    
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=PAGE_INDEX?></title>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assignment1.css"> -->
</head>
<body class="container">
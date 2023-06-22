<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Find out how a career-focused degree or certificate in a program like nursing, medical assisting, healthcare, business, and manufacturing will help you find success and a career you love. Request more information about our flexible class schedules, financial aid options, and transfer-friendly admissions process. It&#x2019;s better here.">
        <title>Career Focused University in CT | Goodwin University</title>
        <?php include
        $_SERVER[ 'DOCUMENT_ROOT']. "/files/includes/template-head.php"; ?>
        <?php include $_SERVER[ 'DOCUMENT_ROOT'].
        "/files/includes/analytics.php"; ?>
    </head>
    
    <body>
        <?php include $_SERVER[ 'DOCUMENT_ROOT'].
        "/files/includes/third-party-after-opening-body.php"; ?>
        <?php include $_SERVER[ 'DOCUMENT_ROOT'].
        "/files/includes/template-header-default.php"; ?>
        <?php include $_SERVER[ 'DOCUMENT_ROOT'].
        "/files/includes/template-topnav-new.php"; ?>
<?php

$request = $_SERVER['REQUEST_URI'];

$page = $_GET["pageName"] ?? null;

switch ($request) {

    case '':
    case '/':
        require($_SERVER['DOCUMENT_ROOT'].'/homepage.php');
        break;

    default:
       if ($page === "error"){ //direct to 404 page if we get a 404
        require($_SERVER['DOCUMENT_ROOT'].'/404.php');
       }
        else if (substr($page, -1) === '/') //if page is an index, we need to specify index.php
        {
         require($_SERVER['DOCUMENT_ROOT']."/".$page.'index.php');   
        }
        else
        {
          require($_SERVER['DOCUMENT_ROOT']."/".$page);  //route plus .php will point to the right file
        }
        break;
}
        ?>
        
    </body>

</html>
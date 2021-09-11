<!DOCTYPE html5>
<html lang="en" dir="ltr">

<head>
    <title>LinkUS Solutions<?php echo ' - '.$pageTitle ?? '' ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./CSS/style.css" />
    <?php if($pageTitle == 'Login & Sign up'){echo '<link rel="stylesheet" type="text/css" href="./CSS/login.css" />';} ?>
    <?php if($pageTitle == 'Home'){echo '<link rel="stylesheet" type="text/css" href="./CSS/timeline.css" />\n';} ?>
    <link rel="stylesheet" type="text/css" href="./CSS/index.css" />
    <link rel="stylesheet" type="text/css" href="./CSS/service.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

</head>

<body>
    <?php 
        include('./navbar.php');
    ?>
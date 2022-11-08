<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forum</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <nav class="topnav">
        <?php require "functions.php" ?>
        <div>
            <a href="/" class="<?= urlIs("/") ?>">Home</a>
            <a href="/forum" class="<?= urlIs("/forum") ?>">Forum</a>
        </div>
        <div>
            <a href="/register" class="<?= urlIs("/register") ?>">Register</a>
            <a href="/login" class="<?= urlIs("/login") ?>">Login</a>
        </div>
    </nav>
    <div class="column">
        <div class="side">
        </div>
        <div class="middle">
            
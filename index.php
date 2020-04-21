<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <title>PHP-Ajax-Dischi</title>
    </head>
    <body>
        <header>
            <div class="container-top">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
            </div>
        </header>
        <main>
            <div class="container-dischi">
                <?php
                    include 'data.php';
                 ?>

                 <?php foreach ($dischi as $key => $disco) { ?>
                     <div class="card">
                        <div class="copertina">  <img src="<?php echo $disco['poster']; ?>" ></div>
                        <h2><?php echo $disco['title']; ?></h2>
                        <h3><?php echo $disco['author']; ?></h3>
                        <span><?php echo $disco['year']; ?></span>
                     </div>
                     <?php

                 } ?>
            </div>
        </main>
    </body>
</html>

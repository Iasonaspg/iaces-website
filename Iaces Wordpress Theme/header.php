<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iaces Website</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="">
        <div id="wrap">
            <nav class="w3-bar w3-mobile">
                <img class="logo" src=" <?php bloginfo('template_url');?>/Imgs/logo2.png" alt="Iaces logo">
                <div class="menu-cont" onclick="iconchange()">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </nav> 
        </div>
    </header>
<!doctype html>
<html lang="en">
    <head>
        <title>MyTest</title>
        <meta name="viewport" content="initial-scale=1" />
        <meta name="description" content="test home page" />
        <link rel="stylesheet" href="<?php echo $_ENV['SITE_URL']; ?>/public/styles/default.css" />
    </head>
    <body>
    <header>
    <div class="row-1">
            <div class="col-1 happy-new-year">
                <h2>Happy New Year</h2>
            </div>
    </div>
        <div class="row-1">
            <div class="col-1">
                <a href="<?php echo $_ENV['SITE_URL']; ?>">
                    <img alt="logo-image" class="logo" src="<?php echo $_ENV['SITE_URL']; ?>/public/images/logo.png" />
                </a>
            </div>

            <div class="col-2">
                <ul class="menu">
                    <li><a href="<?php echo $_ENV['SITE_URL']; ?>">Home</a></li>
                    <li><a href="<?php echo $_ENV['SITE_URL']; ?>/page/about-us/">About Us</a></li>
                </ul>
            </div>
        </div>
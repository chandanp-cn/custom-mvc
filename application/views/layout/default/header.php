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
            <div class="col-1">
                <ul class="">
                    <li><a href="mailto:info@test.com">info@test.com</a></li>
                    <li><a href="tel:789456321">78 9456 123</a></li>
                </ul>
            </div>
            <div class="col-2">
                <ul class="social-media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Youtube</a></li>
                </ul>
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
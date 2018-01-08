# Simple Routing System
Have you ever wished to have routes in your php website but you do not want to install all those massive frameworks? This is solution for you. 

### Installation
Pull files from repository and place them in your htdocs

## Config
Open core/config.php 
```sh
    home      =>      Your index page
    pages     =>      Directory with your pages.
    handler   =>      Page that will be shown when url is wrong
```

## Routes
Open routes.php to add new routes
```sh
Router::add('URL', 'PAGE', 'ROUTE-NAME [opt]');

Router::add('home', 'home.php');
Navigating to yourwebsite.sth/home will load home.php
```
## Examples
```sh
Router::add('home', 'home.php', 'home');
Router::add('home', 'home.php');
Router::add('lives/home/', 'live.php', 'lives');
```
## Call route by name
```sh
 <a href="<?php Router::name('home'); ?>">Home</a>
 or just by URL specified
 <li><a href="home">Lives</a></li>
```

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo CSS.DS.'bootstrap.min.css'; ?>">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo CSS.DS.'bootstrap-responsive.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo CSS.DS.'main.css'; ?>">

        <script src="<?php echo JS.DS.'/vendor/modernizr-2.6.2-respond-1.1.0.min.js'; ?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top" style="">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/mvc2">Project name</a>
                    <div class="nav-collapse collapse" id="menu" >
                        <?php echo $this->afficher_menu(0, 0,$this->mymenu); ?>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
             <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
            </div>
                
			<!--<h1> layout </h1>-->

			<?php echo $content_for_layout; ?>
            

        </div> <!-- /container -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src=" <?php echo JS.DS.'vendor/jquery-1.9.1.min.js';?>"><\/script>')</script>

        <script src="<?php echo JS.DS.'vendor/bootstrap.min.js';?>"></script>

        <script src="<?php echo JS.DS.'main.js'; ?>"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>


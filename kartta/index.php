<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Talkoopäivän kartta</title>
    <style>
    <!--
	    html,body {
	    	margin: 0;
	    	padding: 0;
	    	height: 100%;
	    }
    -->
    </style>
  </head>
  <body>


	<div style="height: 5%; background-color: black"></div>
	<iframe src="http://messis.fi<?= ($_GET['url'] ? $_GET['url'] : '/ngm') ?>" style="width: 100%; height: 94%" frameborder="no"></iframe>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-47400935-1', 'talkoot.fi');
        ga('send', 'pageview');
    </script>
  </body>
</html>

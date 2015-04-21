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
		a {
			color: white;
		}
    -->
	.navbar {
		margin-bottom:0;
	}
    </style>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  </head>
  <body>


<nav class="navbar navbar-default" style="margin-bottom: 0">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="http://talkoot.fi/2015">Talkoopäivä</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li><a href="http://talkoot.fi/2015/kartta">Kartta</a></li>
		<li><a href="http://messis.fi/uusi/?mode=talkoopaiva" target="kartta">Järjestä talkoot</a></li>
    <li><a href="http://messis.fi/fi/paivitatapahtumia/?mode=talkoopaiva" target="kartta">Muokkaa talkoita</a></li>
    <li><a href="http://messis.fi/fi/kirjaudu-ulos/?mode=talkoopaiva" target="kartta">Kirjaudu ulos</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--
	<div style="height: 5%; background-color: black">
		<a href="http://talkoot.fi">Etusivu</a>
		<a href="http://talkoot.fi/2015/kartta">Kartta</a>
		<a href="http://messis.fi/uusi/?mode=talkoopaiva" target="kartta">Järjestä talkoot</a>
	</div>
-->
	<iframe name="kartta" src="http://messis.fi/wp-content/themes/myeti/ngm/index.html?mode=talkoopaiva<?= ($_GET['url'] ? $_GET['url'] : '') ?>" style="width: 100%; height: 94%" frameborder="no"></iframe>

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

<?php
/*
Template name: Haaste
*/


if($_POST['secret']=="työnjuhla" and isset($_POST['form']) and ($_POST['lasku'] == "7" or $_POST['lasku'] == "seitsemän")) :

	// muuttujat
	$send = $_POST['form'];


	$message = 'Hei {$send[kaverinimi]},<br/>
		<br/>
		Kaverisi {$send[omanimi]} on haastanut sinut järjestämään talkoot Talkoopäivänä 16.5.:<br/>
		<br/>
		<blockquote>{$send[viesti]}</blockquote><br>

		Talkoopäivä tulee jälleen 16.5. jolloin on aika kääriä hihat yhdessä. Onko sinun kaveri- tai työporukkasi Suomen talkoohenkisin? Vai onko kenties asuin- tai harrasteyhteisösi talkoomeininki vertaansa vailla? Osallistu Talkoopäivän haasteeseen ja lähde mukaan tekemään!<br/>
		<br/>
		Etsimme Suomen talkoohenkistä porukkaa, joka valitaan kaikkien talkoilijoiden joukosta - pidä siis huolta että talkoonne näkyvät ja kuuluvat eri kanavissa. Olemme läsnä <a href="https://www.facebook.com/talkoopaiva/">Facebookissa</a>, <a href="https://twitter.com/talkoopaiva">Twitterissä</a> ja <a href="https://instagram.com/talkoopaiva">Instagramissa</a> - muistakaa käyttää jakamassanne sisällössä #talkoopäivä ja #talkoot hashtageja.<br/>
		<br/>
		Sivuiltamme löytyvät kaikki 16.5. järjestettävät talkoot. Ehkä sieltä löytyy pian sinunkin talkoosi? Lisätietoa Talkoopäivästä ja talkoiden järjestämisestä löydät osoitteesta www.talkoot.fi
		<br/>
		Keväisin terveisin,<br/>
		{$send[omanimi]} ja Talkoopäivän puuhaväki<br/>
		<br/>
		info@talkoot.fi<br/>
		<a href=http://www.talkoot.fi>www.talkoot.fi</a>';




	// lähetetään viesti
	$sending = mail( $send['kaverimaili'], "Lähde mukaan Talkoopäivään!", $message, "From: Talkoopäivä <info@talkoot.fi>\r\nMIME-Version: 1.0\r\nContent-Type: text/html;charset=utf-8" );

	// tarkistetaan, onnistuiko lähetys
	if($sending) : $success = true; else : $success = false; endif;


endif;

?>
<?php include 'header.html';?>

	


		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-8 col-md-offset-2">

					<?php if($success) : ?>
						<div class="alert alert-success">
							 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							Viesti lähetetty onnistuneesti kaverillesi <?=$send['kaverinimi'];?> osoitteeseen <?=$send['kaverimaili'];?></div>
					<?php endif; ?>

					<h2>Haasta kaverisi Talkoopäivään</h2>
					<p class="lead">Voit haastaa kaverisi järjestämään talkoot Talkoopäivänä oheisella lomakkeella.
						Lähetämme kaverillesi sähköpostitse haluamasi viestin sekä Talkoopäivän esittelyn, jonka näet 
						sivun alalaidassa.</p>
					
					<hr>

					<form action="haaste.php?sent=done" method="post">
						<input type="text" class="form-control input-lg" name="form[omanimi]" placeholder="Oma nimesi" required><br>
						<input type="text" class="form-control input-lg" name="form[kaverinimi]" placeholder="Kaverisi nimi" required><br>
						<input type="text" class="form-control input-lg" name="form[kaverimaili]" placeholder="Kaverisi sähköpostiosoite" required><br>
						<textarea class="form-control input-lg" name="form[viesti]" placeholder="Viestisi kaverille" required></textarea><br>
						<input type="text" class="form-control input-lg" name="lasku" placeholder="Kuinka paljon on 5 + 2 ?" required><br>
						<input type="hidden" name="secret" value="työnjuhla">
						<button type="submit" class="btn btn-success btn-lg">Lähetä</button>
					</form>

					<hr>

					<p class="lead">Oman viestisi lisäksi lähetämme kaverillesi seuraavan tiivistelmän Talkoopäivästä.</p>

					<p>Talkoopäivä on valtakunnallinen, vapaaehtoisvoimin etenevä liike, jonka tavoitteena on innostaa ihmiset tekemään asioita yhdessä ja luomaan Suomeen entistä vahvempaa tekemisen kulttuuria. </p>

					<p>Talkoopäivän sivuilta löytyvät kaikki 16.5. järjestettävät talkoot. Ehkä sieltä löytyy pian sinunkin talkoosi? Lisätietoa Talkoopäivästä ja talkoiden järjestämisestä löydät osoitteesta http://www.talkoot.fi</p>
 					<br><br><br><br>

				</div>	


			</div>
		</div>


<!--

Hei <nimi>,
 
<Nimi> on haastanut sinut järjestämään talkoot Talkoopäivänä 16.5.:
 
<viesti>

Talkoopäivä on valtakunnallinen, vapaaehtoisvoimin etenevä liike, jonka tavoitteena on innostaa ihmiset tekemään asioita yhdessä ja luomaan Suomeen entistä vahvempaa tekemisen kulttuuria.

Talkoopäivän sivuilta löytyvät kaikki 16.5. järjestettävät talkoot. Ehkä sieltä löytyy pian sinunkin talkoosi?
 
Lisätietoa Talkoopäivästä ja talkoiden järjestämisestä löydät sivuilta http://talkoot.fi
 
Keväisin terveisin,
<Nimi> ja Talkoopäivän puuhaväki

-->


<?php include 'footer.html';?>

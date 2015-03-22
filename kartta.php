<?php include 'header.html';?>
<div style="height: 60px; background-color: black"></div>
<iframe src="http://messis.fi<?= ($_GET['url'] ? $_GET['url'] : '/ngm') ?>" style="width: 100%; height: 95%" frameborder="no"></iframe>
<?php include 'footer.html';?>

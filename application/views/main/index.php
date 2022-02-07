<p><b><?= $title ;?></b></p>

<h1>News</h1>

<?php foreach($news as $value) : ?>

<h3><?= $value['title'] ;?></h3>
<p><?= $value['text'] ;?></p>
<hr>

<?php endforeach ;?>
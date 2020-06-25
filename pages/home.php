
<div class="cont">
<ul>
<?php
$contents = file("content/contents.cnt");

$n = rand(0, count($contents)-1);

$cont=explode(";",$contents[$n]);

echo'<a href="'.$cont[4].'">
<li>
<h2><p>'.$cont[1].'</p></h2>
<div class="flex">
    <div class="thumb">
    <img src="'.$cont[2].'">
    </div>
    <div class="details">
    '.$cont[3].'
    <p>'.$cont[0].'</p>
    </div>
</div>

</li>
</a>
';

?>
</ul>
</div>
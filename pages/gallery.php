
<ul class="gallery">

    <?php

    $gallery = file("media/gallery.cnt");

    for($i=0;$i<count($gallery);$i++)
    {
        $picinfo=explode(";", $gallery[$i]);

        echo'
            <li>
                <a href="'.$picinfo[2].'" target="_blank" title="Show">
                <img src="'.$picinfo[2].'" alt="'.$picinfo[1].'">
                <p>'.$picinfo[0].'</p>
                </a>
            </li>
        ';
    }

    ?>

</ul>
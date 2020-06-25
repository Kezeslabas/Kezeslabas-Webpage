<div class="posts">
    <ul>
    <?php


    $max_posts=5;
    for($i=$p_count-1;$i>-1;$i--)
    {
        if($max_posts>0)
        {
            $a_post=explode(";", $posts[$i]);

            if(array_key_exists($a_post[0],$users))
            {
                echo'
                <li>
                <div class="user">
                    <img src="'.$users[$a_post[0]].'">
                </div>
                <div class="text">'.$a_post[0].'
                <span>'.$a_post[1].'</span>
                <p>'.$a_post[2].'</p>
                </div>
                </li>
                ';
                $max_posts--;
            }
        }
        else
        {
            break;
        }
    }

    ?>
    </ul>
</div>
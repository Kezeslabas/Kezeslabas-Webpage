<form action="" method="post">
    <div class="form_inp">
    Scripts<input type="checkbox" name="onlyscripts" value="true" checked="checked" />
    Blueprints<input type="checkbox" name="onlyblueprints" value="true" checked="checked"/>
    Videos<input type="checkbox" name="onlyvideos" value="true" checked="checked"/>
    <input type="submit" name="filter" value="Filter" />
    </div>
</form>

<div class="cont">
    <ul>
    <?php

    $showscripts=true;
    $showblueprints=true;
    $showvideos=true;

    if(isset($_POST["filter"]))
    {
        if(empty($_POST["onlyscripts"]))$showscripts=false;
        if(empty($_POST["onlyblueprints"]))$showblueprints=false;
        if(empty($_POST["onlyvideos"]))$showvideos=false;
    }

    $contents = file("content/contents.cnt");

    $c_count=count($contents);

    for($i=$c_count-1;$i>-1;$i--)
    {
        $show=false;
        $cont=explode(";",$contents[$i]);
        switch($cont[0])
        {
            case "Script":
                {
                    if($showscripts)
                    {
                        $show=true;
                    }
                    break;
                }
            case "Blueprint":
                {
                    if($showblueprints)
                    {
                        $show=true;
                    }
                    break;
                }
            case "Video":
                {
                    if($showvideos)
                    {
                        $show=true;
                    }
                    break;
                }
            default:break;
        }
        if($show)
        {
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
        }
    }

    ?>
    </ul>
</div>
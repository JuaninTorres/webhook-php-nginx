<?php
    $parametrosURL = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
    if ( $_POST['payload'] && is_dir("/path/hasta/mis/dominios/{$parametrosURL[0]}/{$parametrosURL[1]}/.git"))
    {
        shell_exec( "cd /path/hasta/mis/dominios/{$parametrosURL[0]}/{$parametrosURL[1]} && git reset --hard HEAD && git pull" );
        echo 'Se supone que hice el PULL';
    }
    else
    {
        echo 'F*ck you very much !!';
    }
?>
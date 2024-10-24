

<?php


class Vue
{
    static function root()
    {

        # $_GET(recupere des infos) + CONDITION -> VUE
        $vue = $_GET ['page'];
        if($vue == 1)
            include_once './vue/presentation.html';
        if($vue == 2)
            include_once './vue/formation.html';
        if($vue == 3)
            include_once './vue/about.html';

        elseif($vue >=3 || $vue <=0)
            print "<p> Erreur : La page demandé n'existe pas !";

    }
}

Vue::root();






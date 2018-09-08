<?php
require('simple_html_dom.php');

class Scmeal_Parser{

    function getDoc($uri){
        $html = file_get_html($uri, false, null, 0);

        $this -> parse($html);
    }

    function parse($html)
    {
        $ret = $html -> find('table tbody tr td');
        $day = date('w', strtotime($schYmd));
        echo($day);
        echo($ret[8]);
    }

}

?>
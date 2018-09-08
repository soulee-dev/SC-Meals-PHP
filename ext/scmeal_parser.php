<?php
require('simple_html_dom.php');

class Scmeal_Parser{

    private $trCount;
    private $divCount;

    function getDoc($uri){
        $html = file_get_html($uri, false, null, 0 );

        $this -> parse($html);
    }

    function parse($html)
    {

        for($i = 0; $i <= 6; $i++)
        {
            
            $ret = $html -> find('tr', $i);

            for($j = 0; $j <= 6; $j++)
            {

                $seret = $ret -> find('div', $j);

                if($seret){
                    if(intval($seret -> plaintext) == 1) {
                        $this -> trCount = $i;
                        $this -> divCount = $j;

                        break;
                    }
                }
            }
        }
        $this -> getDataFromDate($html, 3);
    }

    function getDataFromDate($html, $date) 
    {
        $idx = ($this -> divCount + $date) % 7;

        $ret = $html -> find('tr', $this -> trCount + $idx);
        $seret = $ret -> find('div', ($this -> divCount + $idx) % 7);

        echo($seret);
    }
}

?>
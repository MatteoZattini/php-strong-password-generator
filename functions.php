<?php 
    function getRandInt($length, $psswrd, $char) {
        for ($i = 0; $i <= $length - 1; $i++) {
        $psswrd = $psswrd . $char[rand(0, strlen($char) - 1)];
    }
    return $psswrd;
};

?>
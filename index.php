<?php
// Testing config vars in heroku

$strTestVal = genenv("strTestVar");

echo "strTestVal: #####" . $strTestVal . "######";

echo phpinfo();

exit();

?>
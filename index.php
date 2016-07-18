<?php
// Testing config vars in heroku

$strTestVal = getenv("strTestVar");

echo "strTestVal: #####" . $strTestVal . "######";

echo phpinfo();

exit();

?>
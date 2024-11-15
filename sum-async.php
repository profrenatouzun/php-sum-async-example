<?php

if (array_key_exists("a", $_GET) && array_key_exists("b", $_GET))
{
    echo $_GET["a"] + $_GET["b"];
}
else
{
    echo false;
}

?>
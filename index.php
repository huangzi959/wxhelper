<?php

require "vendor/autoload.php";


$access_token = "adf5ZGU48DFy3x4u5ZHThd90oiZSIyKoBk1XifxF2tZ-EdUgTOCgP8__IbpkfvqsVmjI_d-JOdSFzv6dSJ4dBXsqbZRKfHFCx2zpssPJZ2uIIY8jZ-af9XXljnOwivk4JGGiAEAFCC";
$component_appid = "wx0f56e0990602ec68";

$component = new \Loytor\Wxhelper\Wechat\Components($component_appid, $access_token);
$result = $component->createPreauthcode();
var_dump($result);
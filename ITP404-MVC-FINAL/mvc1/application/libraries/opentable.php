<?php

class Opentable {
public function getOpensFromJSON($biz,$zip) {
$url = "http://opentable.heroku.com/api/restaurants?name=".$biz."&zip=".$zip;
$jsonString = file_get_contents($url);
$arrayOfOpens = json_decode($jsonString);
return $arrayOfOpens;
}

}

?>



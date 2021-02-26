<?php

class Valid
{
    private $_datalayer;

    function __construct()
    {
        $this->_datalayer = new DataLayer();
    }

    function validName($name)
    {
        return !empty($name) && ctype_alpha($name);
    }

    function validLastName($lastName){
        return !empty($lastName) && ctype_alpha($lastName);
    }

    function validAge($age)
    {
        return is_numeric($age) && ($age < 118 && $age > 18);
    }

    function validPhone($phone) {
        return (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone));

    }

    function validEmail($email) {
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$email)) {
            return true;
        }
        return false;
    }

    function validGender($gender)
    {
//        $sexual = array("Male", "Female", "NB", "Trans Feminine", "Trans Masculine");
        $validSexuals = $this->_datalayer->getGender();
        foreach ($gender as $selected) {
            if (!in_array($selected, $validSexuals, TRUE)) {
                return false;
            }
        }
    }
    function validOutdoor($outdoor)
    {
        $validOutdoors = $this->_dataLayer->outDoor();
//        $outdoor = array("Disc Golf", "Running", "Star Gazing", "Snow Sledding", "Shooting", "Cooking", "SnowBoarding", "Skiing");
        foreach ($outdoor as $selected) {

            if (!in_array($selected, $validOutdoors, TRUE)) {
                return false;
            }
        }
    }

    function validIndoor($indoor) {
//        $indoor = array("Drawing", "TV", "Movies", "Acting", "Dancing", "Guitar", "Flute", "Piano", "Break Dancing", "Yoga", "Yoda", "Yojimbo");
        $validIndoors = $this->_dataLayer->inDoor();
        if(!in_array($indoor, $validIndoors, TRUE)){
            return true;
        }
        else {
            return false;
        }
    }


}
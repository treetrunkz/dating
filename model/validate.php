<?php

//<!---->
//<!--This criterion is linked to a Learning OutcomeA PHP file contains functions to properly validate name, age, phone, email, and outdoor and indoor interests. The validation file is stored in the model folder.-->
//<!--- validName() checks to see that a string is all alphabetic-->
//<!--- validAge() checks to see that an age is numeric and-->
//<!--between 18 and 118-->
//<!--- validPhone() checks to see that a phone number is valid-->
//<!--(you can decide what constitutes a “valid” phone number, but don't make the user guess!)-->
//<!--- validEmail() checks to see that an email address is valid-->
//<!--- validOutdoor() checks each selected outdoor interest against a list of valid options-->
//<!--- validIndoor() checks each selected indoor interest against a list of valid options-->

$nameErr = $lastNameErr = $emailErr = $phoneError = $outdoorError = $indoorError = "";


$isValid1 = $isValid2 = $isValid3 = $isValid4 = $isValid5 = $isValid6 = false;

function validFirstName($val) {
    if(ctype_alpha($val)){
        $nameErr = "";
        $isValid1 = true;
    }
    // else if it's not
    else {
        $nameErr = "Name must be alphabetical";
    }
}

function validLastName($val){
    if(ctype_alpha($val)){
        $lastNameErr = "";
        $isValid7 = true;
    }
    else {
        $lastNameErr = "Last name must be alphabetical";
    }
}

function validAge($val)
{
    if (is_numeric($val) && ($val < 118 && $val > 18)) {
        $ageError = "";
        $isValid2 = true;
    } else {
        $ageError = "Age must be numeric and between 18 and 118 years old";
        $isValid = false;
    }
}

function validPhone($val) {
    if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $val)) {
    $phoneError = "";
    $isValid3 = true;
    }
    else {
        $phoneError = "Phone input was incorrect";
        $isValid = false;
    }
    
}

function validEmail($val) {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$val)) {
        $emailError = "";
        $isValid4 = true;
    }
    return false;
}

function validGender($val){
    $sexual = array("Male", "Female", "NB", "Trans Feminine", "Trans Masculine");
    if(in_array($val, $sexual, TRUE)){

    }
}
function validOutdoor($val) {
    $outdoor = array("Disc Golf", "Running", "Star Gazing", "Snow Sledding", "Shooting", "Cooking", "SnowBoarding", "Skiing");
    if(in_array($val, $outdoor, TRUE)){
        $outdoorError = "";
        $isValid5 = true;
    }
    else {
        $outdoorError = "Input is not in the list";
        $isValid = False;
    }
}

function validIndoor($val) {
    $indoor = array("Drawing", "TV", "Movies", "Acting", "Dancing", "Guitar", "Flute", "Piano", "Break Dancing", "Yoga", "Yoda", "Yojimbo");
    if(in_array($val, $indoor, TRUE)){
        $indoorError = "";
        $isValid6 = true;
    }
    else {
        $indoorError = "The input is not within the list";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    validFirstName($_POST['inputName1']);
    validLastName($_POST['inputName2']);
    validAge($_POST['inputAge']);
    validPhone($_POST['inputPhone']);
    validIndoor($_POST['indoor']);
    validOutdoor($_POST['outdoor']);
}
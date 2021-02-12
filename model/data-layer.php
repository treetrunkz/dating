<?php

/*Return a list of colors
*
*@return array
 */

function getColors() {
    $sex = array("Male", "Female", "Non-Binary", "X");
    return $sex;
}
function getSex() {
    $sexual = array("Male", "Female", "NB", "Trans Feminine", "Trans Masculine");
    return $sexual;
}
function getOrientation() {
    $orientation = array("Gay", "Straight", "Pan/Bi");
    return $orientation;
}
function getState() {
    $state = array(
        'AL','AK','AS','AZ','AR','CA','CO','CT','DE','DC','FM','FL','GA',
        'GU','HI','ID','IL','IN','IA','KS','KY','LA','ME','MH','MD','MA',
        'MI','MN','MS','MO','MT','NE','NV','NH','NJ','NM','NY','NC','ND',
        'MP','OH','OK','OR','PW','PA','PR','RI','SC','SD','TN','TX','UT',
        'VT','VI','VA','WA','WV','WI','WY');
    return $state;
}
function inDoor() {
    $indoor = array("Drawing", "TV", "Movies", "Acting", "Dancing", "Guitar", "Flute", "Piano", "Break Dancing", "Yoga", "Yoda", "Yojimbo");
    return $indoor;
}
function outDoor() {
    $outdoor = array("Disc Golf", "Running", "Star Gazing", "Snow Sledding", "Shooting", "Cooking", "SnowBoarding", "Skiing");
    return $outdoor;
}

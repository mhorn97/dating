<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/2/2018
 * Time: 11:09 PM
 * Page that holds validation methods for the interest page
 */
function validOutdoor($outdoor)
{
    if(!empty($outdoor)) {
        foreach ($outdoor as $activity) {
            if ($activity != "hiking" && $activity != "biking" && $activity != "swimming" && $activity != "collecting" && $activity != "walking" && $activity != "climbing") {
                return false;
            }
        }
    }else{
        return false;
    }
    return true;
}

function validIndoor($indoor)
{
    if(!empty($indoor)) {
        foreach ($indoor as $activity) {
            if ($activity != "tv" && $activity != "movies" && $activity != "cooking" && $activity != "board games" && $activity != "puzzles" && $activity != "reading" && $activity != "cards" && $activity != "video games") {
                return false;
            }
        }
    }else{
        return false;
    }
    return true;
}

$errors=array();

if(!validIndoor($indoor))
{
    $errors['indoor'] = "Please enter valid indoor activities";
}
if(!validOutdoor($outdoor))
{
    $errors['outdoor'] = "Please enter valid outdoor activities";
}

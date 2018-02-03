<?php
/**
 * Created by PhpStorm.
 * User: michael horn
 * Date: 2/2/2018
 * Time: 5:01 PM
 */

function validName($name)
{
    if(!empty($name) && is_string($name))
    {
        return true;
    }
    else
        {
        return false;
        }
}
function validAge($age)
{
    if (is_numeric($age) && $age >= 18)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function validPhone($phone)
{
    if(is_numeric($phone) && strlen((string)$phone) == 10)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validOutdoor($outdoor)
{
    foreach($outdoor as $activity)
    {
        if($activity != "hiking" && $activity != "biking" && $activity != "swimming" && $activity != "collecting" && $activity != "walking" && $activity != "climbing")
        {
            return false;
        }
    }
    return true;
}

function validIndoor($indoor)
{
    foreach($indoor as $activity)
    {
        if($activity != "tv" && $activity != "movies" && $activity != "cooking" && $activity != "board games" && $activity != "puzzles" && $activity != "reading"
        && $activity != "cards" && $activity == "video games")
        {
            return false;
        }
    }
    return true;
}

$errors = array();

if(!validName($name))
{
    $errors['name']="Please enter a valid name.";
}
else
{
    $success=sizeOf($errors) == 0;
}

if(!validAge($age)) {
    $errors['age'] = "Please enter a valid age";
}
else
{
    $success=sizeOf($errors == 0);
}
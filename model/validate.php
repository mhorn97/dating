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


$errors = array();

if(!validName($fname) || !validName($lname))
{
    $errors['name']="Please enter a valid name.";
    echo "ERROR";
}

if(!validAge($age)) {
    $errors['age'] = "Please enter a valid age";
}
if(!validPhone($phone))
{
    $errors['phone'] = "Please enter a valid phone number. (No dashes)";
}
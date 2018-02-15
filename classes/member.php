<?php
/**
 * Created by PhpStorm.
 * User: Michael Horn
 * Date: 2/14/2018
 * Time: 3:25 PM
 */

class Member
{
    protected $fname;
    protected $lname;
    protected $age;
    protected $gender;
    protected $phone;
    protected $email;
    protected $state;
    protected $seeking;
    protected $bio;

    function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    //FNAME
    function setFName($fname)
    {
        $this->fname = $fname;
    }

    function getFName()
    {
        return $this->fname;
    }

    //LNAME
    function setLName($lname)
    {
        $this->lname = $lname;
    }

    function getLName()
    {
        return $this->lname;
    }

    //AGE
    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }

    //GENDER
    function setGender($gender)
    {
        $this->gender = $gender;
    }

    function getGender()
    {
        return $this->gender;
    }

    //PHONE
    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    function getPhone()
    {
        return $this->phone;
    }
}
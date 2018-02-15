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

    public function __construct($fname, $lname, $age, $gender, $phone)
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

    //email
    function setEmail($email)
    {
        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }

    //state
    function setState($state)
    {
        $this->state = $state;
    }

    function getState()
    {
        return $this->state;
    }

    //seeking
    function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    function getSeeking()
    {
        return $this->seeking;
    }

    //bio
    function setBio($bio)
    {
        $this->bio = $bio;
    }

    function getBio()
    {
        return $this->bio;
    }

    function setPremium($premium)
    {
        $this->premium = $premium;
    }

    function getPremium()
    {
        return $this->premium;
    }
}

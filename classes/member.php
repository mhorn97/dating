<?php
/**
 * Created by PhpStorm.
 * User: Michael Horn
 * Date: 2/14/2018
 * Time: 3:25 PM
 * @author Michael Horn
 * @version 1.0
 *
 */

/**
 * Class Member represents a member of the dating site
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

    /**
     * Member constructor.
     * @param $fname first name of user
     * @param $lname last name of user
     * @param $age age of user
     * @param $gender gender of user
     * @param $phone phone number of user
     */
    public function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    //FNAME

    /**
     * Sets the first name of the user
     * @param $fname first name
     */
    function setFName($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return first name of user
     */
    function getFName()
    {
        return $this->fname;
    }

    //LNAME

    /**
     * Sets the last name of the user
     * @param $lname last name
     */
    function setLName($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return last name of user
     */
    function getLName()
    {
        return $this->lname;
    }

    //AGE

    /**
     * METHOD WITH VALIDATION
     * Sets the age of the user
     * if the age in param is less than 0, then it defaults to 0
     * @param $age age of user
     */
    function setAge($age)
    {
        if($age < 0 || !is_numeric($age))
        {
            $this->age = 0;
        }
        else
        {
            $this->age = $age;
        }
    }

    /**
     * @return age of user
     */
    function getAge()
    {
        return $this->age;
    }

    //GENDER

    /**
     * Sets the gender of the user
     * @param $gender gender of user
     */
    function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return gender of user
     */
    function getGender()
    {
        return $this->gender;
    }

    //PHONE

    /**
     * Sets the phone number of the user
     * @param $phone phone number of user
     */
    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return phone number of user
     */
    function getPhone()
    {
        return $this->phone;
    }

    //email

    /**
     * Sets the email of the user
     *
     * VALIDATION METHOD
     * if email is empty -> default to "No email"
     * @param $email email of user
     */
    function setEmail($email)
    {
        if (empty($email))
        {
            $this->email = "No email";
        }
        else
        {
            $this->email = $email;
        }
    }

    /**
     * @return email of user
     */
    function getEmail()
    {
        return $this->email;
    }

    //state

    /**
     * Sets the state location of user
     * VALIDATION METHOD
     * if state is empty--> value = "Not specified"
     * @param $state state of user
     */
    function setState($state)
    {
        if(empty($state))
        {
            $this->state = "Not specified";
        }
        else {
            $this->state = $state;
        }
    }

    /**
     * @return state of the user
     */
    function getState()
    {
        return $this->state;
    }

    //seeking

    /**
     * Returns what gender the user is seeking
     * VALIDATION METHOD
     * if empty, seeking someone
     * @param $seeking gender user is seeking
     */
    function setSeeking($seeking)
    {
        if(empty($seeking))
        {
            $this->seeking = "Someone";
        }
        else {
            $this->seeking = $seeking;
        }
    }

    /**
     * @return gender user is seeking
     */
    function getSeeking()
    {
        return $this->seeking;
    }

    //bio

    /**
     * Sets the biography of the user
     *  VALIDATION METHOD
     *if the bio is empty, set it to "I am an interesting person"
     * @param $bio biography of user
     */
    function setBio($bio)
    {
        if(empty($bio))
        {
            $this->bio = "I am an interesting person!";
        }
        else {
            $this->bio = $bio;
        }
    }

    /**
     *
     * @return biography of user
     */
    function getBio()
    {
        return $this->bio;
    }
}

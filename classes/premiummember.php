<?php
/**
 * Created by PhpStorm.
 * User: Michael Horn
 * Date: 2/15/2018
 * Time: 10:35 AM
 *
 * @author Michael Horn
 * @version 1.0
 */

/**
 * Class PremiumMember represents a premium member for the dating site
 */
class PremiumMember extends Member
{
    private $_inDoorActivities= array();
    private $_outDoorActivities = array();

    /**
     * @return array of indoor activities
     */
    function getIndoorActivities()
    {
        return $this->_inDoorActivities;
    }

    /**
     * Sets the in-door activities the user is interested in
     * @param $inDoorActivities in-door activities
     */
    function  setIndoorActivities($inDoorActivities)
    {
        $this->_inDoorActivities = $inDoorActivities;
    }

    /**
     * @return array of out-door activities the user is interested in
     */
    function getOutDoorActivities()
    {
        return $this->_outDoorActivities;
    }

    /**
     * Sets the out-door activities array that contains what the user is interested in
     * @param $outDoorActivities out-door activities
     */
    function setOutDoorActivities($outDoorActivities)
    {
        $this->_outDoorActivities = $outDoorActivities;
    }
}
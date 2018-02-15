<?php
/**
 * Created by PhpStorm.
 * User: Michael Horn
 * Date: 2/14/2018
 * Time: 3:37 PM
 */

class PremiumMember extends Member
{
    private $_inDoorInterests = array();
    private $_outDoorInterests = array();

    function __construct($inDoorActivities, $outDoorActivities)
    {
        $this->_inDoorActivities = $inDoorActivities;
        $this->_outDoorActivities = $outDoorActivities;
    }

    function getIndoorActivities()
    {
        return $this->_inDoorActivities;
    }

    function  setIndoorActivities($inDoorActivities)
    {
        $this->_inDoorActivities = $inDoorActivities;
    }

    function getOutDoorActivities()
    {
        return $this->_outDoorActivities;
    }

    function setOutDoorActivities($outDoorActivities)
    {
        $this->_outDoorActivities = $outDoorActivities;
    }
}
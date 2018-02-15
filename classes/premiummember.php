<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/15/2018
 * Time: 10:35 AM
 */

class PremiumMember extends Member
{
    private $_inDoorActivities= array();
    private $_outDoorActivities = array();

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
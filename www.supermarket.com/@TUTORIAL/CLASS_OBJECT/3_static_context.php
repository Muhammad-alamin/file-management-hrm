<?php

class Staff
{
    public static $org_name;

    public static function getOrgName()
    {
        return self::$org_name;
    }
}

Staff::$org_name = "PeopleNTech";

/*
$st1 = new Staff;
echo $st1::$org_name;
echo $st1->org_name; 
*/

/*
$st1 = new Staff;
echo $st1::$org_name;
echo $st1->getOrgName();
*/

/*
$st1 = new Staff;
echo $st1::$org_name;
$st2 = new Staff;
echo $st2::$org_name;
*/

?>
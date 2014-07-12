<?php
/**
 * BDay Plugin for Jomsocial
 *
 * @copyright (C) 2014 Eric Tracz All Rights Reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link http://friq.pl
 **/

defined('_JEXEC') or die('Restricted access');
require_once JPATH_ROOT .'/components/com_community/libraries/core.php';


class plgCommunityBDay extends CApplications
{
var $name = "BDay";
var $_name = 'bday';
}

$cuser = CFactory::getUser();
$data = $cuser->getInfo('FIELD_BIRTHDATE');

echo "$data";
echo '\r\n';

//date in mm/dd/yyyy format; or it can be in other formats as well
$birthDate == $data;
//explode the date to get month, day and year
$birthDate = explode("/", $birthDate);
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
echo "Age is:" . $age;


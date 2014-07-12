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

$birthday = $data;
$cur_day = date('Y-m-d');
$cur_time_arr = explode('-',$cur_day);
$birthday_arr = explode('-',$birthday);

$cur_year_b_day = $cur_time_arr[0]."-".$birthday_arr[1]."-".$birthday_arr[2];

if(strtotime($cur_year_b_day) < time())
{
    echo "Birthday already passed this year";
}
else
{
    $diff=strtotime($cur_year_b_day)-time();//returns current time in seconds
    echo 'Days left to Birthday: ' . $days=floor($diff/(60*60*24));
}

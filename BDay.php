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

$diff=strtotime($cur_year_b_day)-time();
$days=floor($diff/(60*60*24));

if($days == 0)
    {
    echo "BDAY_TODAY_IS_BIRTHDAY";
    }
        else
        {
            if(strtotime($cur_year_b_day) < time())
                {
                echo "BDAY_PASSED_THIS_YEAR";
                }
                    else
                    {
                    echo 'BDAY_DAYS_TO_BIRTHDAY' . $days;
                    }
        }

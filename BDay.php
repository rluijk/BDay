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
echo $data;




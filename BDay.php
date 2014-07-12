<?php

defined('_JEXEC') or die('Restricted access');
require_once JPATH_ROOT .'/components/com_community/libraries/core.php';


class plgCommunityBDay extends CApplications
{
var $name = "BDay";
var $_name = 'BDay';
}
$cuser = CFactory::getUser();
$data = $cuser->getInfo('FIELD_GENDER');
echo $data;

<?php

defined('_JEXEC') or die('Restricted access');
require_once JPATH_ROOT .'/components/com_community/libraries/core.php';

class plgCommunityExample extends CApplications
{
var $name = "BDay";
var $_name = 'BDay';

function plgCommunityExample(& $subject, $config)
{
parent::__construct($subject, $config);
}

function onProfileDisplay()
{
ob_start();

echo 'Hello World';

$content	= ob_get_contents();
ob_end_clean();

return $content;
}
}
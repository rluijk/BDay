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

    function plgCommunityBDay(& $subject, $config)
    {
        parent::__construct($subject, $config);
    }


    function onProfileDisplay()
    {

//Load Language file.
    JPlugin::loadLanguage('plg_community_bday', JPATH_ADMINISTRATOR);

    $cuser = CFactory::getRequestUser();
    $data = $cuser->getInfo('FIELD_BIRTHDATE');

    if(!$data)
    {
        return;
    }

            //calculate days
            $birthday = $data;
            $cur_day = date('Y-m-d');
            $cur_time_arr = explode('-',$cur_day);
            $birthday_arr = explode('-',$birthday);
            $cur_year_b_day = $cur_time_arr[0]."-".$birthday_arr[1]."-".$birthday_arr[2];
            $diff=strtotime($cur_year_b_day)-time();
            $days=floor($diff/(60*60*24));



//displaying plugin in a plugin wrapper
    $content = $this->_getBDayHTML($days, $cur_year_b_day);
    return $content;
    }
            function _getBDayHTML($days, $cur_year_b_day)
    {

        ob_start();


        if($days == 0)
        {
            ?>
            <div><?php echo JText::_('BDAY_TODAY_IS_BIRTHDAY'); ?></div>
        <?php
        }
        else
        {
            if(strtotime($cur_year_b_day) < time())
            {
                ?>
                <div><?php echo JText::_('BDAY_PASSED_THIS_YEAR');?></div>
            <?php
            }
            else
            {
                ?>
                <div> <?php echo JText::_('BDAY_DAYS_TO_BIRTHDAY') . $days; ?></div>
            <?php
            }
        }

        $content	= ob_get_contents();
        ob_end_clean();
        return $content;


    }

}

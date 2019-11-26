<?php
/**
 * smartytest.php uses smartytest.tpl to test a simple Smarty page
 * 
 * @package Smarty
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.1 2011/11/08
 * @link http://www.billnsara.com/advdb/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see smartytest.tpl
 * @todo none
 */
 
/**
 * Here's the physical path to the 'smarty' folder
 * Note we installed it outside the web root
 * 
 */ 
$smartypath = '/home/classes/horsey01/smarty/';

require_once($smartypath  . 'libs/Smarty.class.php');  //We'll use the Smarty path to find the Class resource

$smarty = new Smarty();  //create an instance of the Smarty() class
$smarty->template_dir = $smartypath . 'templates';  //identify paths to Smarty resources
$smarty->compile_dir = $smartypath . 'templates_c';
$smarty->cache_dir = $smartypath . 'cache';
$smarty->config_dir = $smartypath . 'configs';

$smarty->assign('FirstName', 'Ned');  //Assign a variable 'name' to a value 'Ned' for the page
$smarty->display('smartytest.tpl'); //combine the code and HTML template to produce the output

?>
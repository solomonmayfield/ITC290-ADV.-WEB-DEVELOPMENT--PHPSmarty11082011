<?php
/**
 * smarty_inc.php holds pathing and file references to the smarty 
 * folder and creates an instance of the Smarty class named 'smarty'.
 *
 * This file should only be included when Smarty will be used for a file.  
 * The object is created, and essentially a global variable named 'smarty' will 
 * house the instance of the class.
 *
 * Since the Smarty class already exists when this include file is called, all we need to do is
 * attach a template file to output the page:
 * 
 * <code>
 * $smarty->display('smartytest.tpl'); //combine the code and HTML template to produce the page
 * </code>
 *
 * @package Smarty
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.0 2008/10/06
 * @link http://www.billnsara.com/advdb/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
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

?>

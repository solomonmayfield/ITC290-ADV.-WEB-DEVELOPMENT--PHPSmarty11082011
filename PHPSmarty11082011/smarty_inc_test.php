<?php
/**
 * smarty_inc_test.php tests the include file, smarty_inc.php
 *
 * 
 * 
 * @package Smarty
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.1 2011/11/08
 * @link http://www.billnsara.com/advdb/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see smartytest.tpl
 * @see smarty_inc.php 
 * @todo none
 */
 
//copy to demo folder ../ 
require('../inc_0700/smarty_inc.php');

$smarty->assign('FirstName', 'Steve');  #assigns a variable 'name' to a value 'Steve' for the page
$smarty->display('smartytest.tpl'); #combines the code and HTML template to produce the output

?>
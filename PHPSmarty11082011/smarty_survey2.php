<?php
/**
 * smarty_survey2.php uses the $config->theme property to 
 * deduce current theme path for assets and the name of the .tpl file
 *
 * THEME MUST BE SET TO DarkRitual for this to work as 
 * it's currently the only Smarty-ized Theme!
 *
 * @package Smarty
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.1 2011/11/08
 * @link http://www.billnsara.com/advdb/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see DarkRitual.tpl
 * @see smarty_inc.php 
 * @todo none
 */
 
//copy to demo folder ../ 
require '../inc_0700/config_inc.php';

#the following 2 lines of code (in a smarty app) should go into the config_inc.php file
include INCLUDE_PATH . 'smarty_inc.php'; #holds references to Smarty folder and creates smarty instance
$smarty->assign('theme_path', VIRTUAL_PATH . 'themes/' . $config->theme . '/');  #Allows us to link assets to theme

$mySurvey = new Survey(1); #hard wired to survey 1 for our demo
$guts = ""; #will store 'guts' main page output data
if($mySurvey->isValid)
{
	$smarty->assign('title_tag', $mySurvey->Title . "' Survey!"); #title tag
	$guts .= '<div align="center"><h3>' . THIS_PAGE . '</h3></div>';
	$guts .= '<div align="center">Survey Title: ' . $mySurvey->Title . '</div>';
	$guts .= '<div align="center">Survey Description: ' . $mySurvey->Description . '</div>';
}else{
	$smarty->assign('title_tag', "No such survey!"); #title tag
	$guts .= '<div align="center"><h3>No Such Survey</h3></div>';
	$guts .= '<div align="center">There is no such survey!</div>';
}
#here we assign the usual suspects from the $config object to related Smarty variables
$smarty->assign('meta_description', $config->metaDescription); #meta tag data
$smarty->assign('meta_keywords', $config->metaKeywords);
$smarty->assign('meta_robots', $config->metaRobots);
$smarty->assign('banner', $config->banner); #banner
$smarty->assign('copyright', $config->copyright); #copyright in footer
$smarty->assign('sidebar2', $config->sidebar2); #sidebar2
$smarty->assign('nav1', makeLinks($config->nav1,'<li>','</li>')); #makeLinks returns navigation from array
$smarty->assign('guts', $guts); #main page output (body/guts)

$tplFile = $config->theme . '.tpl'; //template file based on $config->theme

if(file_exists($smarty->template_dir . '/' . $tplFile))
{//only load template file if currently exists!
	$smarty->display($tplFile);
}else{//template not found, abort!
	die(trigger_error("Smarty Template file: $tplFile, not found!", E_USER_ERROR));
}

?> 

<?php
/**
 * smarty_survey1.php shows survey_show with adds a 
 * with the DarkRitual theme template
 *
 * The Smarty template (dark_ritual.tpl) is a full file 
 * with our $config data assigned to Smarty variables
 *
 * @package Smarty
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.1 2011/11/08
 * @link http://www.billnsara.com/advdb/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see dark_ritual.tpl
 * @see smarty_inc.php 
 * @todo none
 */
 
//copy to surveys or demo folder ../ 
require '../inc_0700/config_inc.php';
include INCLUDE_PATH . 'smarty_inc.php'; #holds references to Smarty folder and creates smarty instance
$theme_path = VIRTUAL_PATH . 'themes/DarkRitual/'; #web assets are in theme folder currently
$smarty->assign('theme_path', $theme_path);  #Allows us to place a dynamic absolute path
$mySurvey = new Survey(1); #hard wired to survey 1 for our demo
$guts = ""; #will store 'guts' main page output data
if($mySurvey->isValid)
{
	$smarty->assign('title_tag', $mySurvey->Title . "' Survey!"); #title tag
	$guts .= '<div align="center"><h3>' . THIS_PAGE . '</h3></div>';
	$guts .= '<div align="center">Survey Title: ' . $mySurvey->Title . '</div>';
	$guts .= '<div align="center">Survey Description: ' . $mySurvey->Description . '</div>';
	#Normally we would want to do $mySurvey->showQuestions() here, however it echoes to the screen
	#and we would rather have it return data so we can assign it to a smarty variable -
	#this would require a re-write or a new method!!
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

$smarty->display('dark_ritual.tpl'); //combine the code and HTML template to produce the output
?> 

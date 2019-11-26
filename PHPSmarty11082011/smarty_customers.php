<?php
/**
 * smarty_customers.php tests data connectivity via a Smarty template
 *
 * This example creates an empty array named 'customers' and assigns DB rows to 
 * an associative array that allows access to each of the fields
 *
 * This array can then be looped via a foreach construct inside the template to 
 * display the HTML.
 *
 * @package Smarty
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1.1 2011/11/08
 * @link http://www.billnsara.com/advdb/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see smarty_customers.tpl
 * @see smarty_inc.php 
 * @todo none
 */

//copy to demo folder ../  
require '../inc_0700/config_inc.php';
include INCLUDE_PATH . 'smarty_inc.php'; #holds references to Smarty folder and creates smarty instance

$sql = "select CustomerID, FirstName, LastName, Email from test_Customers";
$result = mysqli_query(IDB::conn(),$sql) or die(trigger_error(mysqli_error(IDB::conn()), E_USER_ERROR));
if (mysqli_num_rows($result) > 0)//at least one record!
{//assign results	
	$customer = array(); //create an empty array
	while ($row = mysqli_fetch_assoc($result))
	{//fetch an associative array (name/value pair) of DB rows
		$customer[] =  $row; //append the whole $row array in $admins
	}
}
@mysqli_free_result($result); //free resources

$smarty->assign('customer', $customer);  //Assign a variable 'customers' to the array of DB rows
$smarty->display('smarty_customers.tpl'); //combine the code and HTML template to produce the output
?> 

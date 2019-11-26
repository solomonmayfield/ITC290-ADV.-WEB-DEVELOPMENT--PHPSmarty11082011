<html>
<body>
<div align="center"><h1>test_Customers, via Smarty</h1>
{foreach item=customer from=$customer}
<table width="80%"  border="1" cellspacing="0" cellpadding="4">
    <tr>
    <td>Customer ID: </td>
    <td>{$customer.CustomerID}</td>
  </tr>
  <tr>
    <td>First Name: </td>
    <td>{$customer.FirstName}</td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td>{$customer.LastName}</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td>{$customer.Email}</td>
  </tr>
</table><br/>
{/foreach}
</body>
</html>

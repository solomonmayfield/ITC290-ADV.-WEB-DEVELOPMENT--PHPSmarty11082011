
<?php

//simpleXml.php

$file = 'xml/contacts.xml';


$xml = simplexml_load_file($file);


echo '<pre>';

var_dump($xml);
echo '</pre>';
?>
<?php
require_once 'classes/base.php';
 
$base = new base();
if(isset($_GET['name']))
{
   $tid=$base->sanitize($_GET['name']);
$aquery = "SELECT direct_sales.credit 
FROM direct_sales where name='".$tid."' ORDER BY id DESC
LIMIT 1 ";

$aresult = $base->execute_query($aquery);

$row=  mysql_fetch_array($aresult);
echo $row['credit'];
}

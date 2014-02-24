<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>


<table border='1' width="70%">
<tr>
<td>ID</td>
<td>Username</td>
<td>Phone</td>
</tr>
<?
foreach($data1 as $item) {
?>
<tr>
<td><?=$item['id']?></td>
<td><?=$item['username']?></td>
<td><?=$item['phone']?></td>
</tr>
<? } ?>
</table>

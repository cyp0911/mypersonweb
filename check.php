<?php
include "conn.php";
echo "<h2>Database connect Success!!!</h2>";
?>

<html>
<head>
<title>Message</title>
</head>

<table width="776" border="1" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
	<tr>
    	<td> id </td>
        <td> name </td>
        <td> email </td>
        <td> message</td>
    </tr>
    
<?php
	$sql = mysql_query("select * from feed");
	$info = mysql_fetch_array($sql);
	$i = 1;
	do{
?>


<tr>
	<td> <?php echo $info[id]; ?> </td>
    <td> <?php echo $info[name]; ?> </td>
    <td> <?php echo $info[email]; ?> </td>
    <td> <?php echo $info[comment]; ?> </td>
</tr>

<?php
	$i = $i+1;
	}while($info = mysql_fetch_array($sql));


?>
    



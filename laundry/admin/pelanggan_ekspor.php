 <center>
<h3>Data Member</h3>
<table border="1" bordercolor="#999" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; width:100; border-collapse:collapse;">
	<tr style=" background-color:#CCC; color:#09F; padding:10px;">
		<th>Id Member</th> 
        <th>Nama</th> 
        <th>Alamat</th> 
        <th>Jenis Kelamin</th> 
        <th>Telepon</th> 
       
       
     </tr>
     
<?php 
include('../kdb.php');
$i = 1;
$res= $kdb->query("SELECT * FROM member order by id_member ASC");
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Laporan_Data_Member.doc");
while($row = $res->fetch_assoc()){
	echo '
	<tr style="color:#eee;background-color:#333;text-align:center;padding:10px;text-align:center;">
		
		<td>'.$row["id_member"].'</td>
		<td>'.$row["nama"].'</td>
		<td>'.$row["alamat"].'</td>
		<td>'.$row["jenis_kelamin"].'</td>
        <td>'.$row["telp"].'</td>
	
		
		
	</tr>
	';
	$i++;
}
echo'
	<tr>
		<td colspan="11" style="background-color:#999; color:#eee; padding:8px;">'.date("D, d-m-y").'</td>
	</tr>
';
	
?>
</table>
</center>
<?
  if($strsearch=="Y"){
     $sql="select * from teacher Where  name like '%".$search."%'  ORDER BY name ASC  ";
}else{
     $sql="select * from teacher";
}
				$dbquery=mysql_db_query($dbname, $sql);

$x=1;
				while($result=mysql_fetch_array($dbquery))
				{
					$id_teacher=$result[id_teacher];
					$name=$result[name];


					if($bg == "#DFE6F1") { //ส่วนของการ สลับสี
					$bg = "#E7F0FA";
					} else {
					$bg = "#DFE6F1";
					}

					echo"<tr class='text' bgcolor='$bg' >
						<td align='center'>$x</td>
						<td>&nbsp;$name</td>
						<td align='center'><a href='add_user.php?edit_user_id=$user_id' class='textnormal'>แก้ไข</a> | <a href='delete-function.php?del_user_id=$user_id' class='textnormal'>ลบ</a></td>
					</tr>";
$x++;
				}
		  ?>

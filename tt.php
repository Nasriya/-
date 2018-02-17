<?


include('connection.php');
	if($_POST['Edit']){
		while($row = mysqli_fetch_array( $data )) {
			echo '
			<html>
			<table border="1" cellpadding="0" cellspacing="0" align="center" width="450" bgcolor="#000000">
			<tr><td>
				<table border="0" cellpadding="0" cellspacing="0" align="centre" width="450" bgcolor="#eeeeff">
				<form name="display" method="POST">
					<tr><td>Username:</td>
						<td><input type="text" name="username" value=' . $row['username']. '></td></tr>
					<tr><td>Password:</td>
						<td><input type="password" name="password" value=' . $row['password']. '></td></tr>
					<tr><td>Confirm Password:</td>
						<td><input type="password" name="passconf" value=' . $row['passconf']. '></td></tr>
					<tr><td>Email Address:</td>
						<td><input type="text" name="email" value=' . $row['email']. '></td></tr>
					<tr><td>Firstname:</td>
						<td><input type="text" name="firstname" value=' . $row['firstname']. '></td></tr>
					<tr><td>Surname:</td>
						<td><input type="text" name="surname" value=' . $row['surname']. '></td></tr>
					<tr><td>Sex:</td>
						<td><select name="sex" value=' . $row['sex']. '>
							<option>Male</option>
							<option>Female</option>
							</select></td></tr>
					<tr><td>Type:</td>
						<td><select name="type" value=' . $row['type']. '>
						<option>Spectator</option>
						<option>Amateur</option>
						<option>Rally Driver</option>
						<option>Professional Racing Driver</option>
						</select></td></tr>
					<tr><td>License No (if applicable):</td>
						<td><input type="text" name="licenseNo" value=' . $row['licenseNo']. '></td></tr>
					<tr><td>First line of address:</td>
						<td><input type="text" name="address1" value=' . $row['address1']. '></td></tr>
					<tr><td>Second line of address:</td>
						<td><input type="text" name="address2" value=' . $row['address2']. '></td></tr>
					<tr><td>Town:</td>
						<td><input type="text" name="town" value=' . $row['town']. '></td></tr>
					<tr><td>Post Code:</td>
						<td><input type="text" name="postCode" value=' . $row['postCode']. '></td></tr>
					<tr><td>Make:</td>
						<td><input type="text" name="carMake" value=' . $row['carMake']. '></td></tr>
					<tr><td>Model:</td>
						<td><input type="text" name="carModel" value=' . $row['carModel']. '></td></tr>
					<tr><td>Engine:</td>
						<td><input type="text" name="carEngine" value=' . $row['carEngine']. '></td></tr>
					<tr><td>Modifications:</td>
						<td><textarea name="modifications" cols="25" rows="5" value=' . $row['modifications']. '></textarea></td></tr>
					<tr><td colspan="2" align="right">

					<input type="submit" name="submit" value="Save Changes"/></td></tr></form></table>
				</td></tr></table>
				</br>';
</html>
				mysql_query ("UPDATE user SET firstname = '" . $_POST['password'] . "', '" . $_POST['firstname'] . "',
				'" . $_POST['email'] . "', '" . $_POST['surname'] . "', '" . $_POST['address1'] . "',
				'" . $_POST['address2'] . "', '" . $_POST['town'] . "', '" . $_POST['postCode'] . "',
				'" . $_POST['carMake'] . "', '" . $_POST['carModel'] . "', '" . $_POST['carEngine'] . "',
				'" . $_POST['modifications'] . "' WHERE Member_ID = '" . $_SESSION ['UserID'] . "'", $dbc);
		}
	}
}
?>

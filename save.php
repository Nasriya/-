<?
session_start();
if (isset($_POST['Edit'])) {
	$Username = $_POST['Username'];
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Telephone = $_POST['Telephone'];
	$Address = $_POST['Address'];
	$Password = ($_POST['Password']);

	mysqli_query("UPDATE user SET Firstname='$Firstname', Address='$Address' WHERE Member_ID='{$_SESSION['UserID']}'");
	$_SESSION['message'] = "Address updated!";
	header('location: index.php');
}






}

				//query

                $query="UPDATE user SET Firstname='{$Firstname}', Lastname='{$Lastname}, Username='{$Username}', Address='{$Address}' WHERE Member_ID='{$_SESSION['UserID']}' ";
                 $result = mysqli_query($con,$query);

                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["Member_ID"];
                      $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];
										}
									}

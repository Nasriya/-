<?
session_start();



				//query

                $sql="UPDATE user SET
								Firstname='".$_POST["Firstname"]."',
								Lastname='".$_POST["Lastname"]."',
								Username='".$_POST["Username"]."',
								Address='".$_POST["Address"]."',
								WHERE Member_ID='{$_SESSION['UserID']}' ";
                 $query = mysqli_query($con,$sql);
								 if($query) {

echo "Record update successfully";

}

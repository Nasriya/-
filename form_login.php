<?php session_start();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<title>เข้าสู่ระบบ</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/lightbox.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
  <div class="wrap-body">
    <div class="header">
      <div id='cssmenu' >
        <ul>
           <li><img src="images/f.png" width="150" height="40"></li>
             <li><a href='index.html'><span>หน้าแรก</span></a></li>
            <li><a href='service.html'><span>บริการของเรา</span></a></li>
           <li><a href='contact.html'><span>ติดต่อเรา</span></a></li>
        </ul>
      </div>
    </div>

  <div class="wrapper">
  <div class="container">
    <h1>Welcome</h1>

      <form name="frmlogin"  method="post" action="login.php">
          <input type="text"   id="Username" required name="Username" placeholder="Username">
          <input type="password"   id="Password"required name="Password" placeholder="Password">

        <p>
          <button type="submit" id="Login">Login</button>

        </p>
      </form>
			<p>ยังไม่มีบัญชีผู้ใช้งาน <a href='register.php'>ลงทะเบียน</p>
				</div>

				<ul class="bg-bubbles">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>




</body>
</html>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
<h2>Mobile First Responsiveness</h2>
<h3>Nested Rows (w3-half inside w3-half)</h3>
<p class="w3-large">Try to resize the window!</p>
</div>

<div class="w3-row">
  <div class=" w3-container w3-green">
    <div class="col-25 w3-center">
     <label >Username</label>
   </div>
   <div class="w3-round-xlarge w3-border w3-pale-green" style="width:40%" >
     <p><?php echo $meResult['Username']; ?></p>
   </div>
    <div class="w3-row">
      

    </div>
  </div>

</div>

</body>
</html>

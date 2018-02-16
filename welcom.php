<?php
session_start(); ?>
<div class="body content">
  <div class ="welcome">



  <?php
  $mysqli = new mysqli('localhost', 'root', '', 'mydb');
  $sql = 'SELECT Username, Firtname, Lastname FROM user';
  $result = $mysqli->query($sql);
   ?>
   <div id ="registered">
     <span>POPOPOP</span>
     <?php while ($row = mysqli_fetch_array($result)) {
       echo $row['Username'];
       echo $row['Firstname'];
       echo $row['Lastname'];
     }



      ?>
    </div>

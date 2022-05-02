<?php
if(!isset($_SESSION["user"])){
  header("Location: login.php");
};
?>

<div class="navbar">
    <a class="user" href="index.php">Browse Members</a>

    <?php
  if($_SESSION['role'] == 2){
    echo "<a class='user admin' href='create-member.php'>Create Member</a>";
    }
  ?>
  
    <a class="user" href="logout.php">Log Out</a>
  </div>

  <div class="userDetails">
  <?php
  echo "<p>You are logged in as: {$_SESSION['user']}</p>";
  if($_SESSION['role'] == 2){
    echo "<p>User Role: Administrator</p>";
  } else {
    echo "<p>User Role: User - Read Only</p>";
  }
  ?>
</div>



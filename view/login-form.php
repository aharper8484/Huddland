<?php
 if(isset($_SESSION["error_msg"])){
   echo "<p>{$_SESSION["error_msg"]}</p>";
 }
?>

<div class="login">
  <form action="authenticate.php" method="post" id="login">
    <fieldset>
      <legend>Login</legend>
        <label for="username">Username/Email:</label>
        <input type="text" id="username" name="username" placeholder="your email address">
        <br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" placeholder="password">
        <br>
        <input type="submit" name="login" value="Login">
    </fieldset>
  </form>
</div>

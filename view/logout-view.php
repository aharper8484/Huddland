<div class="wrapper logout">
<?php
session_destroy();
echo "<p>You've been logged out</p>";
echo "<p><a href='login.php'>...back to login screen</a></p>";
?>
</div>
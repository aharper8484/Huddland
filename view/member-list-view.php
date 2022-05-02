<div class="memberList">
<div class="wrapper">
<?php
    //loop over the array of members
    if(isset($members)){
        foreach ($members as $member) {
            echo "<div class='memberList'>";
            echo "<a href='member-details.php?id={$member["id"]}'>{$member["firstname"]} {$member["lastname"]}</a>";
            echo "</div>";
            }
    } else {
        echo "<p>Try again</p>";
    }

?>
</div>

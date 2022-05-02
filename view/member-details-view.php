<div class="memberDetails <?php echo "partyId{$party['id']}" ?>">
<?php

  if($member){
    echo "<h2>Name: {$member['firstname']} {$member['lastname']}</h2>";
  }

  if($party){
    echo "<h2>Party: {$party['name']} party - founded in {$party['date_of_foundation']}</h2>";
  }

  if($constituency){
    echo "<p>Region: {$constituency['region']}</p>";
    echo "<p>Population: {$constituency['electorate']}</p>";
  }

  if($interests){
    echo "<h3><u>Interests</u></h3>";
    echo "<ul>";
      foreach($interests as $interest){
        echo "<li>{$interest["name"]}</li>";
      }
    echo "</ul>";
  }

?>
</div>
<?php

if($members){
echo "<p>You Searched for:</p>";
}

if($firstname){
    echo "<p>First Name:{$firstname}</p>";
}
if($lastname){
    echo "<p>Last Name:{$lastname}</p>";
}
if($party){
    echo "<p>Party: {$partyName['name']}</p>";
}

if(empty($members)){
    echo "<p>No Results Found - please try again</p>";
} else {
    echo "<p>Matches are Displayed below</p>";
}


?>
<?php

//ADD MEMBER OPTIONS FILTER
function addMemberInterestList(){
    $conn = getConnection();
    //select all interests
    //use query when pulling data from table directly (without user input)
    $query = "SELECT * FROM interests";
    $resultset = $conn->query($query);
    $interests = $resultset->fetchAll();
    closeConnection($conn);
    return $interests;
}

//ADD MEMBER CONSTITUENCY OPTIONS
//** return only contituencies with no current MP **
function addMemberConstituencyFilter(){
    $conn = getConnection();
    $query = "SELECT constituencies.id, constituencies.region FROM constituencies
    LEFT JOIN members ON constituencies.id = members.constituency_id
    WHERE members.constituency_id IS NULL";
    $resultset = $conn->query($query);
    $constituencies = $resultset->fetchAll();
    closeConnection($conn);
    return $constituencies;
}


?>
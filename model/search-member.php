<?php

if(isset($_POST["submit"])){
    $validForm = true;
    $firstname = "";
    $lastname = "";
    $party = "";

    if(isset($_POST["firstname"])){
        $validForm = true;
        $firstname = $_POST["firstname"];
    }

    if(isset($_POST["lastname"])){
        $validForm = true;
        $lastname = $_POST["lastname"];
    }

    if(isset($_POST["party"])){
        $validForm = true;
        $party = $_POST["party"];
    }

    if($validForm){
        //statement for member details
        $stmt=$conn->prepare("SELECT * FROM members WHERE (members.firstname=:firstname AND members.lastname=:lastname AND members.party_id=:party) OR (members.party_id=:party) OR (members.firstname=:firstname AND members.lastname=:lastname) OR (members.firstname=:firstname) OR (members.lastname=:lastname);");
        $stmt->bindValue(':firstname',$firstname);
        $stmt->bindValue(':lastname',$lastname);
        $stmt->bindValue(':party',$party);
        $stmt->execute();
        $members=$stmt->fetchAll();
        closeConnection($conn);
        return $members;
    } else {
        echo "<p><em>Try adding extra criteria to find a match</em></p>";
    }

}

function findPartyName($party){
    $conn = getConnection();

    $stmt=$conn->prepare("SELECT parties.name FROM parties INNER JOIN members ON parties.id = members.party_id WHERE parties.id = :party;");
        $stmt->bindValue(':party',$party);
        $stmt->execute();
        $partyName=$stmt->fetch();
        closeConnection($conn);
        return $partyName;

}




?>
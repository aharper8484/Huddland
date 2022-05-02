<?php

//Get All Members Function - List View
function getAllMembers(){
    $conn = getConnection();
    $query = "SELECT * FROM members";
    $resultset = $conn->query($query);
    $members = $resultset->fetchAll();
    closeConnection($conn);
    return $members;
}

//Get Member Details from Member ID
function getMemberById($memberId){
    $conn = getConnection();

    //statement for member details
    $stmt=$conn->prepare("SELECT * FROM members WHERE members.id=:id;");
    $stmt->bindValue(':id',$memberId);
    $stmt->execute();
    $member=$stmt->fetch();
    closeConnection($conn);
    return $member;
}

function getConstituencyById($memberId){
        $conn = getConnection();

        //statement for $constituencies
        $stmt=$conn->prepare("SELECT constituencies.region, constituencies.id, constituencies.electorate FROM members
        INNER JOIN constituencies ON members.constituency_id = constituencies.id
        WHERE members.id=:id;");
        $stmt->bindValue(':id',$memberId);
        $stmt->execute();
        $constituency=$stmt->fetch();
        closeConnection($conn);
        return $constituency;
}


function getPartyById($memberId){
    $conn = getConnection();

    //statement for party details
    $stmt=$conn->prepare("SELECT parties.name, parties.id, parties.date_of_foundation, parties.principal_colour FROM members
    INNER JOIN parties ON members.party_id = parties.id
    WHERE members.id=:id;");
    $stmt->bindValue(':id',$memberId);
    $stmt->execute();
    $party=$stmt->fetch();
    closeConnection($conn);
    return $party;
}

function getInterestsById($memberId){
        $conn = getConnection();
        //statement for interests
        $stmt=$conn->prepare("SELECT interests.name FROM members
        INNER JOIN interest_member ON members.id = interest_member.member_id
        INNER JOIN interests ON interest_member.interest_id = interests.id
        WHERE members.id=:id;");
        $stmt->bindValue(':id',$memberId);
        $stmt->execute();
        $interests=$stmt->fetchAll();
        closeConnection($conn);
        return $interests;
}

?>
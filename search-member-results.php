<?php
include 'model/connect-and-authorise.php';
$conn = getConnection();

include 'view/header.php';
include 'view/navbar.php';
include 'view/member-search-form.php';
include 'model/search-member.php';

if(isset($_POST["party"])){
    $party = $_POST["party"];
    $partyName = findPartyName($party);
}

include 'view/search-criteria-view.php';
include 'view/member-list-view.php';
include 'view/footer.php';
?>
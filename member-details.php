<?php
include 'model/connect-and-authorise.php';
include 'model/display-member.php';
$conn = getConnection();
$memberId = $_GET['id'];

$member = getMemberById($memberId);
$party = getPartyById($memberId);
$constituency = getConstituencyById($memberId);
$interests = getInterestsById($memberId);

include 'view/header.php';
include 'view/navbar.php';
include 'view/member-search-form.php';
include 'view/member-details-view.php';
include 'view/footer.php';
?>
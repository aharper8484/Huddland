<?php
include 'model/connect-and-authorise.php';
include 'model/create-member-filters.php';
$conn = getConnection();
$interests = addMemberInterestList();
$constituencies = addMemberConstituencyFilter();

include 'view/header.php';
include 'view/navbar.php';
include 'view/create-member-form.php';
include 'view/footer.php';
?>
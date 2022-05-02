<?php
include 'model/connect-and-authorise.php';
include 'model/display-member.php';
$conn = getConnection();
$members = getAllMembers();
include 'view/header.php';
include 'view/navbar.php';
include 'view/member-search-form.php';
include 'view/member-list-view.php';
include 'view/footer.php';
?>
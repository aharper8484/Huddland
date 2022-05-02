<?php
include 'model/connect-and-authorise.php';
$conn = getConnection();
include 'model/save-member.php';
include 'model/display-member.php';

if(!empty($newMemberId)){
    $memberId = $newMemberId;
    $member = getMemberById($memberId);
    $party = getPartyById($memberId);
    $constituency = getConstituencyById($memberId);
    $interests = getInterestsById($memberId);
}

include 'view/header.php';
include 'view/navbar.php';

if(!empty($memberId)){
    echo "<p>NEW MEMBER CREATED</p>";
    require 'view/member-details-view.php';
} else {
    echo "<p>ERROR: Please ensure all fields are completed and try again</p>";
}

include 'view/footer.php';
?>
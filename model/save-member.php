<?php
$validForm = true;

if(empty($_POST['firstname'])){
  $validForm = false;
} else {
  $firstname=$_POST['firstname'];
}

if(empty($lastname=$_POST['lastname'])){
  $validForm = false;
} else {
  $lastname=$_POST['lastname'];
}

if(empty($_POST['date_of_birth'])){
  $validForm = false;
} else {
  $date_of_birth=strtotime($_POST['date_of_birth']);
  $date_of_birth=date('Y-m-d', $date_of_birth);
}

if(empty($_POST['party'])){
  $validForm = false;
} else {
  $party=$_POST['party'];
}

if(empty($_POST['constituency'])){
  $validForm = false;
} else {
  $constituency=$_POST['constituency'];
}


if(isset($_POST['interests'])){
  $interests=$_POST['interests'];
} else {
  $validForm = false;
}

if($validForm){
  $query="INSERT INTO members (id, firstname, lastname, date_of_birth, party_id, constituency_id) VALUES (NULL, :firstname, :lastname, :date_of_birth, :party, :constituency)";
  $stmt=$conn->prepare($query);
  $stmt->bindValue(':firstname', $firstname);
  $stmt->bindValue(':lastname', $lastname);
  $stmt->bindValue(':date_of_birth', $date_of_birth);
  $stmt->bindValue(':party', $party);
  $stmt->bindValue(':constituency', $constituency);
  $stmt->execute();

  //use lastInsertID function to retrieve the latest ID (ie. the new member)
  $newMemberId = $conn->lastInsertId();

  if($interests != NULL){
    foreach ($interests as $interest) {
        $query="INSERT INTO interest_member (member_id, interest_id) VALUES ((SELECT members.id FROM members WHERE members.id = $newMemberId), (SELECT interests.id FROM interests WHERE interests.id = :interestid))";
        $stmt=$conn->prepare($query);
        $stmt->bindValue(':interestid', $interest);
        $stmt->execute();
    }
  }
  $conn=NULL;
} else {
  $newMemberId = NULL;
}

?>
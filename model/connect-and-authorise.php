<?php
session_start();

//Get Connection Function
function getConnection(){
    // try{
        $conn = new PDO('mysql:host=localhost;dbname=huddland', 'root', '');
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    // }
    // catch (PDOException $exception)
    // {
    //     echo "Oh no, there was a problem" . $exception->getMessage();
    // }
    return $conn;
}

//Close Connection Function
function closeConnection($conn)
{
	$conn=null;
}


?>
<?php

class MyDB extends SQLite3
{
   function __construct()
   {
         $this->open('database01.db');
   }
}
function addContact($fname, $lname, $pnumber, $email, $advertisement, $comment) {
      
   $db = new MyDB();
   if(!$db){
      echo 'Opened database unsuccessfully';
   } else {
      echo "Opened database successfully\n";
   }

   $sql ='INSERT INTO contact (fname, lname, pnumber, email, advertisement, comment) VALUES ("'.$fname.'", "'.$lname.'", "'.$pnumber.'", "'.$email.'", "'.$advertisement.'", "'.$comment.'");';
   $db->query($sql);
   header('location:contact.php?status=success');
}




/* 
//open the database
$db = new sqlite3('database01.db');


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$pnumber = $_POST["pnumber"];
$email = $_POST["email"];
$advertisement = $_POST["advertisement"];
$comment = $_POST["comment"];


//Insert record  

$db->exec("INSERT INTO contact (fname, lname, pnumber, email, advertisement, comment) VALUES ('$fname', '$lname', '$pnumber', '$email', '$advertisement', '$comment');");

header('location:contact.php?status=success'); */

?>
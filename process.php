<?php
require '../User/database.php';

if(isset($_POST['isClicked'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

/*  The number of ? will depend on the number of your fields
     I want to insert 5 data in 5 fields, this means that the number of my ? is 5
    */
    /*if ($password === $confirm_password) {
        $query = 'INSERT INTO login (`username`, `email`, `password`, `confirm_password`) VALUES (?,?,?,?)';
        $result = $pdo->prepare($query);
        /* Keep in mind the order of your variable in execute() method */
        /* The order of the variable must be the same in your query, in this case the query is in line 19 */
        /* $result->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT)])*/


$query ='INSERT INTO users (`first_name`, `last_name`, `username`, `email`, `password` ) VALUES (?,?,?,?,?)';
$result =$pdo->prepare($query);
   
$result->execute([$first_name, $last_name, $username, $email, $password ]);

if($result){
    echo json_encode(array(`responseCode` => 200));
    exit();
 } else{
    echo json_encode(array(`responseCode` => 500));
    exit();


 }
}




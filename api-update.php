<?php

header('Content-Type:Application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requestd-With');

include"config.php";

$data = json_decode(file_get_contents("php://input"),true);

$id = $data['sid'];
$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

$sql = " UPDATE students SET student_name ='{$name}' , age ='{$age}', city ='{$city}' WHERE id='{$id}' ";


if(mysqli_query($conn,$sql)){

 echo json_encode(array("message"=>"Student Recored Updated","status"=>true));

}else{
    echo json_encode(array("message"=>"Student Recored not Updated","status"=>false));
}
?>

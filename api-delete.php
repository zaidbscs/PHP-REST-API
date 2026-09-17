<?php

header('Content-Type:Application/json');
header('Acess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requestd-With');

include"config.php";

$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['sid'];

$sql = "DELETE FROM students WHERE id={$student_id}";


if(mysqli_query($conn,$sql)){

echo json_encode(array("message"=>"Student Recored Deleted","status"=>false));

}else{
    echo json_encode(array("message"=>"Student Recored not Deleted","status"=>false));
}
?>

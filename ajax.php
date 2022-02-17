<?php
// print_r($_REQUEST);
// print_r($_FILES);
// die;

$action = $_REQUEST["action"];

if(!empty($action)){
    require_once("partials/user.php");
    $obj = new User();
}

if($action=="adduser" && !empty($_POST)){
    $pname=$_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $photo = $_POST["photo"];
    $playerId = (!empty($_POST["userId"]))? $_POST["userId"]:"";

    $imageName = "";
    if(!empty($photo["name"])){
        $imageName = $obj->uploadPhoto($photo);
        $playerData = [
            "name"=>$pname,
            "email"=>$email,
            "mobile"=>$mobile,
            "photo"=>$photo
        ];
    }else{
        $playerData = [
            "name"=>$pname,
            "email"=>$email,
            "mobile"=>$mobile
        ];
    }
    $playerId = $obj->addUser($playerData);

    if(!empty($playerId)){
        $player = $obj->getRow("id",$playerId);
        echo json_encode($player);
        exit();
    }
}

?>
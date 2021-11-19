<?php


$con = mysqli_connect('localhost', 'root', '', 'resume') or die('connection lost');
?>
<?php
function getGeneralInfo($connection){
    $select = mysqli_query($connection,"select * from general_info limit 1");
    $data = mysqli_fetch_array($select);
    return $data;
}
function getExperiences($connection){
    $select = mysqli_query($connection,"select * from experiences  ");
    $data = [];
    while ($row = mysqli_fetch_array($select)){
       array_push($data, $row);
    }

    return $data;
}
function getEducations($connection){
    $select = mysqli_query($connection,"select * from educations  ");
    $data = [];
    while ($row = mysqli_fetch_array($select)){
        array_push($data, $row);
    }
    return $data;
}
function getSkills($connection){
    $select = mysqli_query($connection,"select * from skills  ");
    $data = [];
    while ($row = mysqli_fetch_array($select)){
        array_push($data, $row);
    }

    $select2 = mysqli_query($connection,"select * from skills_tools  ");
    $data2 = [];
    while ($row = mysqli_fetch_array($select2)){
        array_push($data2, $row);
    }
    return ['skills' => $data , 'tools'=>$data2];
}
function getAwards($connection){
    $select = mysqli_query($connection,"select * from awards  ");
    $data = [];
    while ($row = mysqli_fetch_array($select)){
        array_push($data, $row);
    }
    return $data;
}
?>
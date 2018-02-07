<?php
require_once('model/database.php');
require_once('model/courses_db.php');

function get_json_student_list($course_id){

    $studentlist = get_student_list($course_id);
    $json_array = array();
    foreach($studentlist  as $student)
    {
        $json_array[] = $student;
    }
    return $json_array;

}

function get_json_courses(){
    $courselist = get_courses();
    $json_array = array();
    foreach($courselist  as $course)
    {
        $json_array[] = $course;
    }
    return $json_array;

}

function xml_encode($data){
    $xml_string='<?xml version="1.0" encoding="utf-8"?>\n';
    return $xml_string;
}


if($_GET['format'] == 'json' and $_GET['action'] == 'courses') {
    header('Content-Type: text/plain');
    echo json_encode(get_json_courses(), JSON_PRETTY_PRINT);
}elseif ($_GET['format'] == 'xml' and $_GET['action'] == 'students'){
    header('Content-Type: text/plain');
    $course_id=$_GET['course'];
    echo xmlrpc_encode( get_json_student_list($course_id));
}elseif ($_GET['format'] == 'json' and $_GET['action'] == 'students'){
    header('Content-Type: text/plain');
    $course_id=$_GET['course'];
    echo json_encode( get_json_student_list($course_id),JSON_PRETTY_PRINT);
}elseif ($_GET['format'] == 'xml' and $_GET['action'] == 'courses'){
    header('Content-Type: text/plain');
    echo xmlrpc_encode(get_json_courses())  ;
}else {
    die("Incorrect parameter in url !");
}

?>


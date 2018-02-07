<?php
//require_once('util/main.php');
//require_once('util/tags.php');
require_once('model/database.php');
require_once('model/courses_db.php');

?>

<?php
//require_once('course_list.php');
if (isset($_POST['addStudent'])) {
//    $name = POST['addCourse'];

//function add_student($courseID, $firstName, $lastName, $email) {

    add_student($_POST['courseList'],$_POST['firstName'] ,$_POST['lastName'] ,$_POST['email'] );

    header( 'Location: add_student_form.php' );
}


//The $_POST gets the data from the form
//($_POST['course_list.php'])


//function addCourse(){
//    if($_POST['addCourse']){

//        echo $_POST['addCourse'];

//    }
//}


?>
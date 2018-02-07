<?php
//require_once('util/main.php');
//require_once('util/tags.php');
require_once('model/database.php');
require_once('model/courses_db.php');

?>

<?php
//require_once('course_list.php');
if (isset($_POST['addCourse'])) {
//    $name = POST['addCourse'];


    add_course($_POST['courseID'],$_POST['courseName'] );

    header( 'Location: course_list.php' );
} 


//The $_POST gets the data from the form
//($_POST['course_list.php'])


//function addCourse(){
//    if($_POST['addCourse']){

//        echo $_POST['addCourse'];

//    }
//}


?>
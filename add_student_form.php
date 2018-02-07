<?php
//require_once('util/main.php');
//require_once('util/tags.php');
require_once('model/database.php');
require_once('model/courses_db.php');
require_once('add_course.php');

//require_once('model/product_db.php');
//require_once('model/category_db.php');

// Get all categories

// Set the featured product IDs in an array


// Display the home page
?>

<?php include 'view/header.php';
      $doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');

      // Get the application path
      $uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
      $dirs = explode('/', $uri);
      $app_path = '/' . $dirs[1] . '/' . $dirs[2] . '/';

      // Set the include path
      set_include_path($doc_root . $app_path);
      $courses = get_courses();
?>


<section>
    <h1>Add Student</h1>
    <br />

    <form action="add_student.php" method="post">
        Course:
        <select name="courseList" >
            <?php 
                foreach ($courses as $keyvalue => $course)
                {

                    echo "<option value=".'"'.$course['courseID'].'">'.$course['courseID']."-".$course['courseName']."</option>";

                }            
            ?>
        </select>
        <br />
        First Name:
        <input type="text" name="firstName" />
        <br />
        Last Name:
        <input type="text" name="lastName" />
        <br />
        email:
        <input type="email" name="email" />
        <br />
        <input type="submit" name="addStudent" value="Add Student" />
    </form>

    <br />
    <br />
    <a href="index.php">View Student List</a>
    <br />
    <br />

</section>
<?php include 'view/footer.php'; ?>

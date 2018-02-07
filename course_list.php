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
    <h1>Course List</h1><br />
   
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>

        </tr>
        
        <?php foreach ($courses as $keyvalue => $course)
        {

            echo "<tr><td>".$course['courseID']."</td><td>".$course['courseName']."</td></tr>";

        }
        ?>
    </table>
    <br />

    <form action="add_course.php" method="post">
        Course Id: <input type="text" name="courseID"><br>
        Course Name: <input type="text" name="courseName"><br>
        <input type="submit" name="addCourse" value="Add Course" />
    </form>

    <br />
    <br />
    <a href="index.php">List Students</a>
    <br />
    <br />

</section>
<?php include 'view/footer.php'; ?>

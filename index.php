<?php
//require_once('util/main.php');
//require_once('util/tags.php');
require_once('model/database.php');
require_once('model/courses_db.php');


$courseID = "";
$courseName = "";

if(isset($_GET["courseID"])){

 $students = get_student_list($_GET["courseID"]); 
 $courseID = $_GET["courseID"];
 $courseName= $_GET["courseName"];
}

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

<aside>
    <h2>Courses</h2>
    <ul>
        <!-- display links for all categories -->
        <?php foreach ($courses as $course) : ?>
        <li>
            <a href=<?php echo '"index.php?courseID='.$course["courseID"].'&courseName='.$course["courseName"].'">';
            echo $course['courseID']; ?></a>
        </li>
        <?php endforeach; ?>
        <li>&nbsp;</li>
    </ul>
</aside>

<section>
    <h1>Student List</h1><br />
    <h2><?php echo $courseID.' - '.$courseName;?></h2><br />
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>     </th>

        </tr>
        
        <?php foreach ($students as $keyvalue => $student)
        {

            echo "<tr><td>".$student['firstName']."</td><td>".$student['lastName']."</td><td>".$student['email'].'</td><td><form action="delete_student.php" method="post">
                                                         <input type="hidden" name="student_id" value="'.$student['studentID'].'">
                                                        <input type="submit" name="deleteStudent" value="delete"></form></td></tr>';

        }
        ?>
    </table>
    <br />
    <br />
    <a href="add_student_form.php">Add Student</a>
    <br />    
    <a href="course_list.php">List Courses</a>
    <br />
    <br />

</section>
<?php include 'view/footer.php'; ?>

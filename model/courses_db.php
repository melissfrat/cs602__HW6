<?php
function get_courses() {
    global $db;
    $query = 'SELECT * From sk_courses';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
    return "";
}

function get_student_list($couresID) {
    global $db;
    $query = "SELECT * From sk_students WHERE courseID='".$couresID."'";
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }
    catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
    return "";
}
function get_category($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
    return "";
}

function add_course($couresID,  $courseName) {
    global $db;
    $query = "INSERT INTO sk_courses (courseID, courseName) VALUES ('".$couresID."','". $courseName."')";
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }
    catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
    return "";
}

function add_student($courseID, $firstName, $lastName, $email) {
    global $db;
    $query = "INSERT INTO sk_students (courseID, firstName, lastName, email) VALUES ('".$courseID."','". $firstName."','".$lastName."','".$email."')";
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }
    catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
    return "";


}
function delete_student($studentID) {
    global $db;
    $query = "DELETE FROM `sk_students` WHERE studentID=".$studentID ;
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }
    catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
    return "";


}



?>
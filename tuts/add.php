<?php

// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }


// check if the form is submitted
if (isset($_POST['submit'])) {

    //check email
    if (empty(trim($_POST['email']))) {
        echo 'An email is required <br />';
    } else {
        //echo htmlspecialchars($_POST['email']); //htmlspecialchars prevent XSS basic attack
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email must be valid email address';
        }
    }
    // check title
    if (empty(trim($_POST['title']))) { //use the trim to avoid sending blank pages
        echo 'A Name is required <br />';
    } else {
        // echo htmlspecialchars($_POST['title']);
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            echo 'Title must be letters and spaces only';
        }
    }
    //check ingredients
    if (empty(trim($_POST['ingredients']))) {
        echo 'The list of ingredients is required <br />';
    } else {
        // echo htmlspecialchars($_POST['ingredients']);
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            echo 'Ingredients must be a comma separated list <br />';
        }
    }
} // end of post check


// form validation



?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your email:</label>
        <input type="email" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>

</section>

<?php include('templates/footer.php'); ?>



</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize input data
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $sem = htmlspecialchars($_POST['sem']);
    $section = htmlspecialchars($_POST['section']);
    $college = htmlspecialchars($_POST['college']);
    $dob = htmlspecialchars($_POST['dob']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobbies = htmlspecialchars($_POST['hobbies']);
    $interested_domain = htmlspecialchars($_POST['interested_domain']);

    // Display the submitted data
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Registration Successful</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Registration Successful!</h1>";
    echo "<p><strong>First Name:</strong> $first_name</p>";
    echo "<p><strong>Last Name:</strong> $last_name</p>";
    echo "<p><strong>Semester:</strong> $sem</p>";
    echo "<p><strong>Section:</strong> $section</p>";
    echo "<p><strong>College:</strong> $college</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    echo "<p><strong>Interested Domain:</strong> $interested_domain</p>";
    echo "</body>";
    echo "</html>";
} else {
    // Redirect to the form page if accessed incorrectly
    header("Location: index.html");
    exit();
}
?>

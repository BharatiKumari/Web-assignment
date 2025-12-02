<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="output-box">
    <h3>Application Submitted Successfully</h3>

    <?php
    // Collect form values safely
    $name   = htmlspecialchars($_POST["name"]);
    $email  = htmlspecialchars($_POST["email"]);
    $phone  = htmlspecialchars($_POST["phone"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);
    $address = nl2br(htmlspecialchars($_POST["address"]));

    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Address:</strong><br> $address</p>";
    ?>

    <br>
    <center>
        <a href="registration.html">
            <button>Go Back</button>
        </a>
    </center>

</div>

</body>
</html>

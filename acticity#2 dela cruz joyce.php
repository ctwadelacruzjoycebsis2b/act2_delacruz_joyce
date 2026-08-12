<?php

// Nickname: Joyce

/*
Name: Joyce Dela Cruz
Age: 19
Section: BSIS-2B
Address: San Roque, Sto. Rosario, Malolos, Bulacan
Hobbies: Watching movies, Coding, Listening to music
Dream Job: Web Developer
Course: Bachelor of Science in Information Systems
School: Polytechnic College of the City of Malolos
*/

$me = array(
    "name" => "Joyce Dela Cruz",
    "age" => 19,
    "section" => "BSIS-2B",
    "address" => "San Roque, Sto. Rosario, Malolos, Bulacan",
    "hobbies" => "Watching movies, Coding, Listening to music",
    "dream_job" => "Web Developer",
    "course" => "Bachelor of Science in Information Systems",
    "school" => "Polytechnic College of the City of Malolos"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="box">
        <h1>About Me</h1>

        <p><strong>Name:</strong> <?php echo $me["name"]; ?></p>
        <p><strong>Age:</strong> <?php echo $me["age"]; ?></p>
        <p><strong>Section:</strong> <?php echo $me["section"]; ?></p>
        <p><strong>Address:</strong> <?php echo $me["address"]; ?></p>
        <p><strong>Hobbies:</strong> <?php echo $me["hobbies"]; ?></p>
        <p><strong>Dream Job:</strong> <?php echo $me["dream_job"]; ?></p>
        <p><strong>Course:</strong> <?php echo $me["course"]; ?></p>
        <p><strong>School:</strong> <?php echo $me["school"]; ?></p>

        <p class="highlight">
            <?php 
            print "I am " . $me["name"] . ", a " . $me["course"] . 
            " student of " . $me["school"] . ".";
            ?>
        </p>
    </div>
</body>
</html>

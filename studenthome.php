<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
}

elseif ($_SESSION['usertype'] == 'admin') {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="student.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <a href="">Student Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Log Out</a>
        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="">My Courses</a>
            </li>

            <li>
                <a href="">My Result</a>
            </li>
        </ul>
    </aside>

    <div class="content">
        <h1>Sidebar Accordion:</h1>
        <p>
            In this example, we have added an accordion and a dropdown menu inside the side navigation.
            
            Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.
        </p>
    </div>
</body>
</html>
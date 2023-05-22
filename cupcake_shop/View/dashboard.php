<?php include 'header.php';

 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <header > <header>
        <h1>Dashboard</h1>
    </header>

    <nav class="dash-links" >
        <ul>
            <li><a href="profile.php">Profile | </a></li>
            <li><a href="table.php">Table | </a></li>
            <li><a href="search.php">Searching | </a></li>
            <li><a href="sequance.php">Sequence | </a></li>
            <li><a href="Plsql.php">Functions and Procedures | </a></li>
            <li><a href="trigger.php">Trigger | </a></li>
         
        </ul>
    </nav>

    <section class="content">
        <h2>Welcome to the Dashboard!</h2>
        <p>This is the content section of the dashboard.</p>
    </section>

    <script src="dashscript.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>

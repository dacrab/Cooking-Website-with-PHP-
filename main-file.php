<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>RecipeSwap</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>RecipeSwap</h1>
        <nav>    
            <form class="search-form" action="search.php" method="get">
                <input type="text" name="search" placeholder="Search recipes by ingredients">
                <button type="submit">Search</button>
            </form>
            <br>
            <ul>
                <li class="active"><a href="main-file.php">Home</a></li>
                <li><a href="collections.php">Collections</a></li>
                <li><a href="profiles.php">Profile</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="recipe">
            <h2>Recommended recipes</h2>
            <article>
                <h3>Pancakes in the toaster</h3>
                <img src="images/pancakes.jpg" alt="pancakes" height="250">
                <p>If you're looking for the perfect sweet recipe for Sunday brunch, make pancakes in the toaster oven. Easy, quick and without using a pan.</p>
                <br>
                <a href="recipes/pancakes.php" class="button">Show</a>
            </article>
            <br>
            <hr>
            <article>
                <br>
                <h3>Grandma's Easter soup</h3>
                <img src="images/mageiritsa.jpg" alt="mageiritsa" height="250">
                <p>The traditional soup that we eat on Holy Saturday night after the Resurrection, made with lamb offal, vegetables and herbs. After the Lenten fast, it is the first dish containing meat and is eaten to prepare the stomach for the next day.</p>
                <br>
                <a href="recipes/mageiritsa.php" class="button">Show</a>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> RecipeSwap. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
// Database Connection Code (Place this at the end of your HTML file or in a separate file)
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

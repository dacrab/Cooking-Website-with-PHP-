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
            <form class="search-form" action="#" method="get">
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
    <h1>Recipe Categories</h1>
    <div class="recipe-grid">
        <?php
        // Assuming you have an array of categories, you can dynamically generate cards
        $categories = array(
            "breakfast" => "Breakfast",
            "meal" => "Main meals"
            // Add more categories as needed
        );

        foreach ($categories as $key => $category) {
            echo '<div class="recipe-card">';
            echo '<img src="images/' . $key . '.png" alt="' . $key . '" width="150">';
            echo '<a href="collections/' . $key . '.php" class="button">' . $category . '</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>

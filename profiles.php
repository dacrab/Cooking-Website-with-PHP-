<?php
$page = ''; // Set the current page for navigation highlighting, change accordingly for each file
include 'navigation.php'; // Include navigation
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php echo $page ? ucfirst($page) : 'CodeLab'; ?></title>
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
        <section class="profile">
            <div class="user-image">
                <img src="images/pfp.jpg" alt="profile-pic" width="200"></div>
             <div class="user-info">
                <h2>John Smith</h2>
                <h4>Email:</h4>
                    <p>john.smith@gmail.com</p>
                     <h4>Location:</h4>
                     <p>New York, NY</p>
                     <h4>Hobby: </h4>
                     <P>Cooking, Cooking, Photography, Travel</p>
                        <button class="button">Edit
                        </button>    
            </div>
            <div class="user-recipes">
                <div class="centered-element"><h2>My Recipes</h2></div>
                <div class="recipe">
                    <img src="images/pancakes.jpg" alt="pancakes" >
                    <h3>Pancakes in the toaster</h3>
                    <p>If you're looking for the perfect sweet recipe for Sunday brunch, then make pancakes in the toaster. Easy, quick and without using a pan.</p>
                    <a href="recipes/pancakes.php" class="button">Show</a>
                </div>
                <br>
                <div class="recipe">
                    <img src="images/mageiritsa.jpg" alt="mageiritsa" width="450">
                    <h3>Grandma's cooking</h3>
                    <p>The traditional soup eaten on the evening of Holy Saturday after the Resurrection, cooked with liver and lamb intestines, vegetables and herbs. After the Lenten fast, it is the first dish containing meat, so we eat it to properly prepare our stomachs for the next day.</p>
                    <a href="recipes/mageiritsa.php" class="button">Προβολη</a>
                </div>
            </div>
        </section>
    <footer>
        <p>&copy; 2023 RecipeSwap</p>
    </footer>
    </main>
 </body>
</html>

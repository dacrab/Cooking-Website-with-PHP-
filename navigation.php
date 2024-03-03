<!-- navigation.php -->
<nav>    
    <form class="search-form" action="search.php" method="get">
        <input type="text" name="search" placeholder="Search recipes by ingredients">
        <button type="submit">Search</button>
    </form>
    <br>
    <ul>
        <li class="<?php echo $page === 'home' ? 'active' : ''; ?>"><a href="main-file.php">Home</a></li>
        <li class="<?php echo $page === 'collections' ? 'active' : ''; ?>"><a href="collections.php">Collections</a></li>
        <li class="<?php echo $page === 'profile' ? 'active' : ''; ?>"><a href="profiles.php">Profile</a></li>
        <li class="<?php echo $page === 'login' ? 'active' : ''; ?>"><a href="login.php">Login</a></li>
    </ul>
</nav>

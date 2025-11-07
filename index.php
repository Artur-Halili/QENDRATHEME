<?php get_header(); ?>

<header>
    <p id="titla1">QENDRA MOBILE SHOP</p>
    
    <p><?php bloginfo('description'); ?>All the Accesibilities you need can be found here</p>

    <!-- Navigation bar -->
    <nav id="ajid">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a>
    <a href="<?php echo esc_url(home_url('about.php')); ?>">About Us</a>
    <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
</nav>

</header>

<main>
    <!-- Add your page content here -->
    <h1 id="smptitle">Welcome to Qendra Mobile Store</h1>
    <p id="smptext">Browse our latest phones and accessories.</p>
    <br><br><br><br><br><br> <br><br><br><br><br><br>
</main>

<?php get_footer(); ?>
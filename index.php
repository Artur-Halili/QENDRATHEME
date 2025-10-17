<?php get_header(); ?>

<header>
    <p id="titla">QENDRA MOBILE SHOP</p>
    
    <!-- Add site tagline / description -->
    <p><?php bloginfo('description'); ?></p>

    <!-- Navigation bar -->
    <nav>
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a>
    <a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a>
    <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
</nav>

</header>

<main>
    <!-- Add your page content here -->
    <h1>Welcome to Qendra Mobile Store</h1>
    <p>Browse our latest phones and accessories.</p>
</main>

<?php get_footer(); ?>
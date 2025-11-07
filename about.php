<?php
/* 
Template Name: About Us
*/
get_header();
?>

<br><br><br>

<div class="container fade-in">
    <h1 style="text-align:center;">About Qendra Mobile Store</h1>
    <p style="text-align:center; font-size:18px; color:#000;">
        Welcome to <strong>Qendra Mobile Shop</strong> — your trusted destination for the latest smartphones, accessories, and exceptional customer service.
    </p>
    <br>

    <section class="fade-in" style="text-align:center;">
        <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&auto=format&fit=crop&q=80&w=800" alt="Our Store" style="max-width:80%; border-radius:8px; box-shadow:0 0 53px rgba(201,214,210,0.65);">
        <br><br>
        <h2>Who We Are</h2>
        <p style="max-width:800px; margin:0 auto;">
            Founded with a passion for technology, Qendra Mobile Shop has been serving mobile users with genuine devices and top-quality accessories.
            We pride ourselves on offering premium brands like Apple, Samsung, and Xiaomi — all at competitive prices.
        </p>
    </section>
    <br><br>

    <section class="fade-in" style="text-align:center;">
        <h2>Our Mission</h2>
        <p style="max-width:800px; margin:0 auto;">
            Our mission is to deliver the best in mobile innovation while maintaining trust, transparency, and top-tier customer care.
            Every product we sell is verified for authenticity, and every customer is treated like family.
        </p>
    </section>
    <br><br>

    <section class="fade-in" style="text-align:center;">
        <h2>Why Choose Us?</h2>
        <div class="products" style="justify-content:center;">
            <div class="product">
                <h3>Quality Products</h3>
                <p>Only genuine devices and original accessories.</p>
            </div>
            <div class="product">
                <h3>Affordable Prices</h3>
                <p>Competitive pricing and frequent special offers.</p>
            </div>
            <div class="product">
                <h3>Customer Support</h3>
                <p>Our team is always ready to assist you before and after purchase.</p>
            </div>
        </div>
    </section>
    <br><br>

    <section class="fade-in" style="text-align:center;">
        <h2>Visit Us or Get in Touch</h2>
        <p style="max-width:800px; margin:0 auto;">
            Whether you’re upgrading your phone or just exploring options, visit our store or reach out online — we’re here to help!
        </p>
        <br>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" 
           style="background:black; color:white; padding:10px 20px; border-radius:5px; text-decoration:none; font-weight:bold;">
           Contact Us
        </a>
    </section>
</div>

<br><br><br>

<?php get_footer(); ?>

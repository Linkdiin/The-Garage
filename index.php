<?php
/*
Theme Name: ITSolve
Theme URI: https://thegarage.github.io/index.php
Author: Your Name
Author URI: https://thegarage.github.io/index.php
Description: A custom IT service provider WordPress theme
Version: 1.0
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- Header -->
  <header>
    <div class="logo"><?php bloginfo('name'); ?></div>
    <nav>
      <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
    </nav>
    <a href="<?php echo site_url('/contact'); ?>" class="btn-contact">Contact Us</a>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="slider">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="Slide 1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" alt="Slide 2">
    </div>
    <div class="overlay">
      <h1>Your Partner in IT Solutions</h1>
      <input type="text" placeholder="Search Services..." />
    </div>
  </section>

  <!-- About Section -->
  <section class="about">
    <h2>About Us</h2>
    <p>We provide IT services for job platforms, businesses, educational institutions, and healthcare organizations. Our mission is to promote your digital presence.</p>
  </section>

  <!-- Services Section -->
  <section class="services">
    <h2>Our Services</h2>
    <ul>
      <li>Job Portal Development</li>
      <li>Business Website & E-commerce</li>
      <li>Online Education Platforms</li>
      <li>Hospital Management Solutions</li>
      <li>Social Media Promotions</li>
    </ul>
  </section>

  <!-- Reviews Section -->
  <section class="reviews">
    <h2>What Our Clients Say</h2>
    <p>"Outstanding service and great support!" - Client A</p>
    <p>"Very professional and reliable." - Client B</p>
  </section>

  <!-- Contact Section -->
  <section class="contact">
    <h2>Contact Us</h2>
    <form>
      <input type="text" placeholder="Your Name" required />
      <input type="email" placeholder="Your Email" required />
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <div class="logo">ITSolve</div>
    <p>Follow us on:</p>
    <a href="#">Facebook</a> | <a href="#">LinkedIn</a> | <a href="#">Instagram</a>
    <p>&copy; <?php echo date('Y'); ?> ITSolve. All rights reserved.</p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>

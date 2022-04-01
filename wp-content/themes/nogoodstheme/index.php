<?php get_header(); ?>
<main class="pt-5">
  <section class="container">
    <?php get_template_part('company'); ?>
  </section>
  <section class="container my-5 py-5 bg-light">
    <?php get_template_part('about'); ?>
  </section>
  <section class="container mb-5">
    <?php get_template_part('assess'); ?>
  </section>
  <section class="container bg-light">
    <?php get_template_part('join'); ?>
  </section>
</main>
<?php get_footer(); ?>

<?php 
  $slug = get_post_field('post_name');
?>
	<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="<?php echo $slug ?>">
        <div class="my-auto">
          <h1 class="mb-0"><?php the_field('first_name') ?>
            <span class="text-primary"><?php the_field('last_name') ?></span>
          </h1>
          <div class="subheading mb-5"><?php the_field('address') ?>
            <a href="mailto:name@email.com"><?php the_field('email') ?></a>
          </div>
          <p class="lead mb-5"><?php the_field('intro') ?></p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
    </section>

    <hr class="m-0">

<?php 
  $slug = get_post_field('post_name');
?>
	<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="<?php echo $slug ?>">
        <div class="my-auto">
          <h2 class="mb-5"><?php the_title() ?></h2>
          <div>
          	<?php the_content() ?>
          </div>
          <h2 class="mb-5"></h2>
          
          <?php 
            $args = array('post_type' => 'experience');
            $query = new WP_Query($args);
            while($query->have_posts()){

              $query->the_post();

              get_template_part('experiences/content','work-place');  

            }
            /* Restore original Post Data */
            wp_reset_postdata();

          ?>

        </div>
    </section>

    <hr class="m-0">

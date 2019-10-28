
<div id="page-info">
  <div id="featured">
    <div id="accordion">
      <dl class="easy-accordion">
        <?php
          is_numeric( get_option( 'origin-num-slides' ) ) ? $num_slides =  get_option( 'origin-num-slides' ) : $num_slides = 5;
          global $post;
          $args = [
            'numberposts' => $num_slides, 'category' => 5
          ];
          $customs_posts = get_posts($args);
          foreach ($customs_posts as $post) : setup_postdata( $post ) ; ?> 
            <dt><?php the_title(); ?></dt>
            <dd>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_post_thumbnail(); ?></p>
              <?php the_excerpt(); ?>
            </dd>
          <?php endforeach; wp_reset_postdata();?>
        ?>
      </dl>
    </div><!-- end accordion -->
  </div><!-- end featured -->
  <div id="facebook"

  </div>
</div><!-- end page-info -->

<?php
  $theParent = wp_get_post_parent_id(get_the_ID());
  if ($theParent) { ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a>  </p>
    </div>
  <?php }
?>

<!---  <span class="metabox__main"><?php the_title(); ?></span>-->
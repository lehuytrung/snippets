<?php
/*
 * GenerateBlocks dynamic featured image sizing
*/
add_action( 'wp_head', function() {
  if( is_single() && has_post_thumbnail() ) {

      // Get our images URLs

      $feat_img_url_medium = get_the_post_thumbnail_url(get_the_ID(),'medium');
      $feat_img_url_medium_large = get_the_post_thumbnail_url(get_the_ID(),'medium_large');
      $feat_img_url_large = get_the_post_thumbnail_url(get_the_ID(),'large');
      $feat_img_url_full = get_the_post_thumbnail_url(get_the_ID(),'full');

      // print our preloaded images

      echo '<link rel="preload" media="(max-width: 400px)" as="image" href="'.$feat_img_url_medium.'"/>';
      echo '<link rel="preload" media="(max-width: 768px) and (min-width: 401px)" as="image" href="'.$feat_img_url_medium_large.'"/>';
      echo '<link rel="preload" media="(max-width: 1024px) and (min-width: 769px)" as="image" href="'.$feat_img_url_large.'"/>';
      echo '<link rel="preload" media="(min-width: 1025px)" as="image" href="'.$feat_img_url_full.'"/>';
      
      // print our CSS styles

      echo '<style>
      @media(max-width: 400px) {
          .gb-container.featured-background:before { background-image: url('.$feat_img_url_medium.');}
      }
      @media(max-width: 768px) and (min-width: 401px) {
          .gb-container.featured-background:before { background-image: url('.$feat_img_url_medium_large.');}
      }
      @media(max-width: 1024px) and (min-width: 769px) {
          .gb-container.featured-background:before { background-image: url('.$feat_img_url_large.');}
      }
      @media(min-width: 1025px) {
          .gb-container.featured-background:before { background-image: url('.$feat_img_url_full.');}
      }
      </style>';
  }		
},1000);
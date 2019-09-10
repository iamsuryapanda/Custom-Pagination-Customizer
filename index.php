<?php
  global $paged;
  if ( get_query_var( 'paged' ) ) { 
      $paged = get_query_var( 'paged' ); 
  } elseif ( get_query_var( 'page' ) ) { 
      $paged = get_query_var( 'page' ); 
  } else { 
      $paged = 1; 
  }                        
  $test = new WP_Query(array(
                  'post_type' => 'post',
                  'paged'=>$paged
              ));
  if ( $test->have_posts() ) {
    while($test->have_posts()):$test->the_post();

    //Loop Content

    endwhile;    
    custom_pagination( $blogpost ); //Pagination
    wp_reset_postdata(); 
  }
?>

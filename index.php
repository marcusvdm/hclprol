<?php get_header(); ?>
	<div id="conteudo">

		<?php
              $loop = new WP_Query( array(
              	'pagename' 		=> 'home'
                //'post_type'     => 'page',
                //'orderby'       => 'menu_order',
            	//'order'         => 'ASC'
              ) );
              
              if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
                

                echo '<h2>'.the_title().'</h2>';
                echo  the_permalink();
                the_content();
               
                
              endwhile; endif;
              wp_reset_postdata();
            ?>

				
		<?php //get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
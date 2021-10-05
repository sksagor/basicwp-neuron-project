 <?php get_header(); ?>
 <img class="img-fluid" alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">

 <!-- ========= Dynamic content  Section ===== -->
 <div class="content-area">
     <main>
         
         <section class="middle-area">
             <div class="container">
                 <div class="row">
                     
                     <div class="news col-md-9">
                         
                         <?php 
                           //If there are any posts  
                         if( have_posts() ):
                             //while have posts, show them to us.
                            while( have_posts() ): the_post();
                         
                           get_template_part( 'template-parts/content', get_post_format());
                            endwhile;
                         else:
                         ?>
                         
                         <p>There is nothing yet to be displayed</p>
                          <?php endif; ?>  <!-- adding template part Function -->
                     </div>
                     <aside class="sidebar col-md-3 h-100"><?php get_sidebar('blog'); ?></aside>
                 </div>
             </div>

         </section>
         <section class="map">
             <div class="container">
                 <div class="row">Map</div>
             </div>
         </section>
     </main>
 </div><!-- ========= End Dynamic content  Section ===== -->
 <?php get_footer(); ?>

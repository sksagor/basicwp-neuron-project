<?php
/* Template Name: General Template
*/
?>


 <?php get_header(); ?>
  <img class="img-fluid" alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
 <!-- ========= Dynamic content  Section ===== -->
 <div class="content-area">
     <main>
       
         </section>
         <section class="middle-area">
             <div class="container">
                 
                  
                     <div class="general-template">
                         <?php 
                           //If there are any posts 
                         if( have_posts() ):
                             //while have posts, show them to us.
                            while( have_posts() ): the_post();
                         
                         ?>
                         
                         <article>
                             <h2><?php the_title(); ?></h2>
                             <p><?php the_content(); ?></p>
                         </article>
                         <p>This page template is same on all selected  page</p>
                         <?php 
                         endwhile;
                         
                         else:
                         
                         ?>
                         <p>There is nothing yet to be displayed</p>
                          <?php endif ?>
                     </div>
                
        

         </section>
         
     </main>
 </div><!-- ========= End Dynamic content  Section ===== -->
 <?php get_footer(); ?>
 
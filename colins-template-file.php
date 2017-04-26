<?php
/**
 * Template Name: Colins template
 * I've put this together just for illustration of how a template page works
 * Essentially the page uses the comment you can see on the top line, it tells wordpress that this is a template page, and
 * when you go into the edit page part of the wordpress dashboard you'll then see the name of the template displayed in a
 * drop down box.
 * As many of these template files can be generated as you require, and they essentially display the content in the format 
 * of your choosing.  
 * The below example is taking the page.php file in the twentyseventeen theme 
 * You can then customise this to display extra fields as per necessary, which you'll specify in the themes functions file
 * wordpress is great for adding functionality at a later date, and can be done adhoc
 * In the below example I've added a section to display the authors avatar image, and a link to email the author - css is 
 * inline for demo purposes only
 */
 

get_header();

    /* This is an added section to get the name of the current author */
?>



<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			


                 </main><!-- #main -->



	</div><!-- #primary -->
</div><!-- .wrap -->
	<div class="wrap">


                       <div id="authordetails" style="text-align: center; margin: 0 auto;">
                               <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>

                       <p><strong>Email the author:</strong> <a href="mailto<?php $user_email = get_the_author_meta( 'user_email' ); ?>"><?php
                       the_author_meta( 'display_name' ); ?></a></p>

		       </div> <!-- #authordetails -->

        </div><!-- .wrap -->
<?php get_footer();

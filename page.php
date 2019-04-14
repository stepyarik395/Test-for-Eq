<?php get_header(); ?>




<div class="wrapper-form" style = "display: flex; justify-content: center; color:white">



	<div class = "form" style="text-align: center; max-width: 450px; min-width: 300px">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

		the_content();
		endwhile; else: ?>
		
<?php endif; 


?>
</div>
	
</div>

	





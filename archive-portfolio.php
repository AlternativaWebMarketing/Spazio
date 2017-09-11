<?php get_header(); ?>

<!-- Sub header single page -->
<header class="subpage-navbar">
	<nav>
		<i class="fa fa-long-arrow-left"></i>
	</nav>
	<hgroup>
		<h3><?php post_type_archive_title(); ?></h3>
	</hgroup>
</header>
<!-- Sub header single page -->
	
	<div class="content">
		<!-- function get list portfolio -->
			<?php listPortfolio(); ?>
		<!-- function get list portfolio -->	
	</div>


<!-- get footer -->
	<?php get_footer(); ?>
<!-- get footer -->


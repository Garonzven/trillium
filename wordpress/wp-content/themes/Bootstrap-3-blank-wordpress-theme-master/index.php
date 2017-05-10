<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="wp-content/themes/Bootstrap-3-blank-wordpress-theme-master/css/style.css">
    <?php wp_head(); ?>


	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>

    <!-- <nav class="navbar navbar-default" role="navigation">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse">

      </div>
    </nav> -->


			<!--FIn de header-->
      <!-- <div class="container-full">
        <div class="button-menu">
          <span class="glyphicon glyphicon-menu-hamburger" style="font-size:2em; color:white;" onclick="displayMenu()"></span>
        </div>
        <div class="button-menu-apply text-decoration">
          <a href="#">APPLY NOW</a>
        </div>

        <div id="menu">
          <div class="triangulo"></div>
          <ul>
            <li><a href="#">Menu1</a></li>
            <li><a href="#">Menu1</a></li>
            <li><a href="#">Menu1</a></li>
          </ul>
        </div>
<div class="row">
</div>
	<div class="col-md-8">
<div class="col-md-offset-2 box-simple">
</div> -->
<?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title('<h2>','</h2>'); ?>
		 		<?php the_content(); ?>
			</div>
			<?php
			if (is_singular()) {
				// support for pages split by nextpage quicktag
				wp_link_pages();

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );

				// tags anyone?
				the_tags();
			}
			?>
		   <?php endwhile; ?>

		<?php if (!is_singular()) : ?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php endif; ?>

		<?php else : ?>

		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>

		<?php endif; ?>
	</div>

	<div class="col-md-4">

		<?php
		 if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
		?>
		<?php
		     endif;
		?>
	</div>

</div>



<script type="text/javascript">
  function displayMenu(){
    var display;
    var menu = document.getElementById("menu");
    display = menu.style.display;
    if(display == "block"){
      menu.style.display = "none";
    }else{
      menu.style.display = "block";
    }
  }
</script>

<script type="text/javascript">

</script>

<?php get_footer(); ?>

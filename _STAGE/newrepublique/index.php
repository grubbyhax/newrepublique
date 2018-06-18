<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



		<div id="content" class="">

			<div id="hero_nav"></div>
			<div id="hero_banner" class="hero_slider">


<?php
    $loop = new WP_Query( array( 'post_type' => 'banner', 'orderby' => 'order', 'order' => 'ASC' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); 
		
$thumbDOM = simplexml_load_string(get_the_post_thumbnail());
$src = $thumbDOM->attributes()->src;
if ($src != '') :
		?>
				<div id="hero_banner_01" class="slide">
					<div class="image" style="background-image: url(<?php echo $src ?>)">
					</div>
					<div class="copy">
						<h2><?php echo get_the_title(); ?></h2>
<?php echo get_the_content(); ?>
					</div>
				</div>

        <?php
		    endif;
		endwhile;
    endif;
    wp_reset_postdata();
?>



			</div>

			<div id="hero_cards">

<?php
    $loop = new WP_Query( array( 'post_type' => 'card', 'orderby' => 'order', 'order' => 'ASC' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); 
		
$thumbDOM = simplexml_load_string(get_the_post_thumbnail());
$src = $thumbDOM->attributes()->src;
if ($src != '') :
		?>
				<div id="hero_card_01" class="">
					<div class="image">
						<div>
<a href="index.html"><img src="<?php echo $src ?>"></a>
						</div>
					</div>
					<div class="copy">
						<div>
							<h3><?php echo get_the_title(); ?></h3>
<?php echo get_the_content(); ?>
						</div>
					</div>
				</div>

        <?php
		    endif;
		endwhile;
    endif;
    wp_reset_postdata();
?>
			</div>



<?php get_footer();

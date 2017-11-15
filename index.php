<?php get_header();?>

        <!-- 头部：标题、描述 -->
        <a-entity
        	href="<?php echo esc_url( home_url( '/' ) ); ?>"
        	text-geometry="size:1;bevelSize:6;bevelThickness:0;font:#optimerBoldFont;value:<?php echo bloginfo( 'name' ); ?>"
        	align="center"
        	material="color: black"
        	position="-4 4 -10">
       	</a-entity>
        <a-entity
        	text-geometry="size:0.5;bevelSize:1;bevelThickness:0;font:#optimerBoldFont;value:<?php echo get_bloginfo( 'description', 'display' )?>"
        	align="center"
        	material="color: grey"
        	position="-4 3 -10">
        </a-entity>

        <!-- 正文清单 -->
        <?php
        while ( have_posts() ) : the_post();
        ?>

        	<!-- 标题 -->
			<a-entity
	        	href="<?php echo esc_url( get_permalink() ); ?>"
	        	text-geometry="size:0.5;bevelSize:2;bevelThickness:0;font:#optimerBoldFont;value:<?php echo strip_tags(the_title('', '', false)); ?>"
	        	align="center"
	        	material="color: black"
	        	position="-4 2 -10">
	       	</a-entity>

	       	<!-- 正文 -->
	       	<a-entity
	        	text-geometry="size:0.3;bevelSize:2;bevelThickness:0;font:#optimerBoldFont;value:<?php echo strip_tags(get_the_content()); ?>"
	        	align="center"
	        	material="color: black"
	        	position="-4 1 -10">
	       	</a-entity>
		<?php
		endwhile;

        ?>
<?php get_footer();?>
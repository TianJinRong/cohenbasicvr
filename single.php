<?php get_header(); ?>
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
    endwhile; // End of the loop.
    ?>

<?php get_footer(); ?>
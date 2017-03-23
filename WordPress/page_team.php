<?php
/**
 * Template Name: Member Page
 *
 * @package TelWP Theme
 */
?>
<?php
add_filter(
    'body_class',
    'myplugin_add_body_class'
);

function myplugin_add_body_class($classes) {
    $classes[] = "miembros";
    return $classes;
}
?>
<?php get_header(); ?>
<!-- Esta parte viene por defecto de la plantilla -->
<div class="mh-section mh-group">
    <div id="main-content" class="mh-content"><?php
        mh_newsdesk_lite_before_page_content();
        while (have_posts()) : the_post();
            get_template_part('content', 'page');
            comments_template();
        endwhile; ?>
    </div>
    <div id="main-content" class="mh-content">
<!-- Con esta query muestra todos los posts de miembros en este caso, pero puedes cambiar miembros por otra cosa que hayamos creado en las nuevas páginas personaliadas -->
        <?php $query = new WP_Query( array( 'post_type' => 'miembros', 'order' => 'ASC' ) );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                        the_post_thumbnail($size = array(300, 300));
                        echo "<br>";
                        ?>
                        <a href="<?php the_permalink(); ?>"><?= the_excerpt(); ?></a>
                        <?php
                        }
                    }
                    ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
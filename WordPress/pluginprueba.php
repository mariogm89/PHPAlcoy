<?php
/*
Plugin Name: Plugin Prueba
Description: Course plugin example
Version: 20170315
Author: Yo mismo
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-
2.0.html
Text Domain: mg
Domain Path: /languages
*/
//función para compartir algo en twitter
function mg_tuitea_shortcode(
    $atts,
    $content=null
) {
    if(null == $content) {
        $url = get_permalink( $post->ID );
        $title = get_the_title( $post->ID );
        $tweet = '<a class="twitter-share-button" href="http://twitter.com/home/?status=Recomendado: \'' . $title . '\' ' . $url . '"> Compartir en Twitter</a>';
    } else{
        $tweet = '<a class="twitter-share-button" href="http://twitter.com/home/?status=Recomendado: \'' . $content . '\' ' . $url . '"> '. $content . '</a>';
    }
    return $tweet;
}
add_shortcode( 'tuitea', 'mg_tuitea_shortcode' );

class TelWP_Widget extends WP_Widget {
    public function __construct() {
        $widget_details = array(
            'classname' => 'telwp_widget',
            'description' => 'Solo un widget'
        );
    parent::__construct( 'telwp_widget', 'Mi propio widget', $widget_details );
    }
/**
 * Front-end display of widget.
 *
 * @see WP_Widget::widget()
 *
 * @param array $args Widget arguments.
 * @param array $instance Saved values from database.
 */

    public function widget( $args, $instance ) {
        $r = new WP_Query(
            apply_filters(
                'widget_posts_args',
                array(
                    /*'cat' => $instance['cat'],
                    'posts_per_page' => $instance['qty'],
                    'post_status' => 'publish'*/
                    'post_type' => 'miembros',
                    'order' => 'ASC'
                )
            )
        );
        if ($r->have_posts()) :
        echo $args['before_widget'];
        if ( $instance['title'] ) {
            echo $args['before_title'] . $instance['title'] . $args['after_title'];
        } ?>
    <ul>
        <h4 class="widget-title"><span>Miembros del grupo</span></h4>
        <?php while ( $r->have_posts() ) : $r->the_post(); ?>
        <li class="list-center"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();  ?></a><br><?php the_title(); ?></li>
        <?php endwhile; ?>
    </ul>
        <?php echo $args['after_widget'];
        wp_reset_postdata();
        endif;
    }
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : 'Últimamente';
        $select = ! empty( $instance['cat'] ) ? $instance['cat'] : 0;
        $qty = ! empty( $instance['qty'] ) ? $instance['qty'] : 5;
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'cat' ); ?>">Categoría</label>
    <?php wp_dropdown_categories( ['selected' => $select, 'id' => $this->get_field_id( 'cat' ), 'name' => $this->get_field_name( 'cat' )] ); ?>
    </p>
    <p>
    <label for="<?php echo $this->get_field_id( 'qty' ); ?>">Cantidad</label>
    <input class="tiny-text" id="<?php echo $this->get_field_id( 'qty' ); ?>" name="<?php echo $this->get_field_name( 'qty' ); ?>" type="number" step="1" min="1" value="<?php echo $qty; ?>" size="2">
    </p>
    <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['cat'] = intval($new_instance['cat']);
        $instance['qty'] = intval($new_instance['qty']);
        return $instance;
    }
}
add_action( 'widgets_init', function(){
    register_widget( 'telwp_widget' );
});

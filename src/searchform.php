<?php
/**
 * The template for displaying search forms
 *
 */
?>
    <!-- <form class="d-flex" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <input class="form-control me-2" type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;' ); ?>" />
        <input class="btn btn-outline-success" type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search' ); ?>" />
    </form> -->

    <?php echo do_shortcode('[ivory-search id="1009" title="AJAX Search Form"]') ?>
<?php
//Disable Block New
add_filter('use_block_editor_for_post', '__return_false');

//Code phan trang
function prw_wp_corenavi($custom_query = null, $paged = null) {
    global $wp_query;
    if($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $paged = ($paged) ? $paged : get_query_var('paged');
    $big = 999999999;
    $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
    if($total > 1) echo '<div class="pagenavi">';
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, $paged ),
        'total' => $total,
        'mid_size' => '4', // Số trang hiển thị khi có nhiều trang trước khi hiển thị ...
        'prev_text'    => __('←','prw'),
        'next_text'    => __('→','prw'),
    ) );
    if($total > 1) echo '</div>';
}
//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

if(get_theme_mod('html_disable_update')){
    function remove_core_updates(){
        global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
    }
    add_filter('pre_site_transient_update_core','remove_core_updates');
    add_filter('pre_site_transient_update_plugins','remove_core_updates');
    add_filter('pre_site_transient_update_themes','remove_core_updates');
}
function wph_short_desc_in_archive_product() {
    echo '<p class="am-woocommerce-excerpt">' .  get_the_excerpt() . '</p>';
}
add_action( 'woocommerce_after_shop_loop_item_excerpt', 'wph_short_desc_in_archive_product', 7 );

add_filter('posts_search', 'pvs_search_is_exact', 20, 2);
function pvs_search_is_exact($search, $wp_query){

    global $wpdb;

    if(empty($search))
        return $search;

    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';

    $search = $searchand = '';

    foreach((array)$q['search_terms'] as $term) :

        $term = esc_sql(like_escape($term));

        $search.= "{$searchand}($wpdb->posts.post_title REGEXP '[[:<:]]{$term}[[:>:]]')";

        $searchand = ' AND ';

    endforeach;

    if(!empty($search)) :
        $search = " AND ({$search}) ";
        if(!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    endif;

    return $search;

}
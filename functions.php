//Change the display date on the post from last edited to last updated.

function et_last_modified_date($the_date) {
    if (( 'post' === get_post_type() || 'page' === get_post_type() ) && ! is_admin()) {
        $the_time     = get_post_time('His');
        $the_modified = get_post_modified_time('His');
        $date_format  = 'd/m/Y'; // Set the date format
        $date         = $the_modified !== $the_time ? get_post_modified_time($date_format) : get_post_time($date_format);

        return $date;
    }

    return $the_date;
}
add_filter('get_the_date', 'et_last_modified_date');
add_filter('get_the_time', 'et_last_modified_date');

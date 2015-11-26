<?php

/*
  Plugin name: Directlink
  Plugin URI: http://www.maxpagels.com
  Description: Allow your post titles to link to external sites
  Version: 0.1
  Author: Max Pagels
  Author URI: http://www.maxpagels.com
*/


function direct_link($url, $post, $leavename) {
  if(!get_post_custom_values('direct_link')) {
    return $url;
  }
  else {
    $direct_url = get_post_custom_values("direct_link");
    return htmlspecialchars($direct_url[0]);
  }
}

add_filter( 'post_link', 'direct_link', 10, 3 );

?>
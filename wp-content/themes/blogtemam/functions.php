<?php 

//Menü Oluşturma Functions.php
add_theme_support('menus');
register_nav_menus(array(
 'header_menu' => 'Header Menü',
  'footer_menu' => 'Footer Menü'
));

//Thumbnail Funtions (functions.php yazılacak)
add_theme_support( 'post-thumbnails' );
add_image_size( 'anasayfa', 810, 326, true );

//The Exceprt Functions (functions.php yazılacak)
function new_excerpt_length($length) {
return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');


//PageNavi Functions (functions.php yazılacak)
function sayfalama($pages = '', $range = 3)
{
$showitems = ($range * 2)+1;
global $paged;
if(empty($paged)) $paged = 1;
if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}
if(1 != $pages)
{
echo "<div class='wp-pagenavi'>";
if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
}
}
if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
echo "</div>\n";
}
}

 ?>
<?php
function my_enqueue_scripts(){
  // wp_enqueue_script('jquery');
  // wp_enqueue_script('main.js', get_template_directory_uri().'/js/main.js', array());
  // wp_enqueue_script('common.js', get_template_directory_uri().'/js/common.js', array());
  wp_enqueue_style('reset', get_template_directory_uri().'/css/reset.css', array());
  wp_enqueue_style('my_style', get_template_directory_uri().'/css/style.css', array());
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


// single page上部画像に文字列を表示

function get_main_title(){
  if(is_singular('post')):
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif(is_page()):
    return get_the_title();
  elseif(is_category()):
    return single_cat_title();
  endif;
}


// アイキャッチ画像を利用
add_theme_support('post-thumbnails');

add_image_size('news-img', 300, 300, true);
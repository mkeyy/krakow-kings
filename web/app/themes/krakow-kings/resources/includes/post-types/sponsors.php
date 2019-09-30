<?php

use PostTypes\PostType;

$names = [
    'name' => 'sponsor',
    'singular' => 'Sponsor',
    'plural' => 'Sponsorzy',
    'slug' => 'sponsor',
];
$labels = [
    'name' => _x('Sponsorzy', 'post type general name', 'kings'),
    'singular_name' => _x('Sponsor', 'post type singular name', 'kings'),
    'menu_name' => _x('Sponsorzy', 'admin menu', 'kings'),
    'name_admin_bar' => _x('Sponsor', 'add new on admin bar', 'kings'),
    'add_new' => _x('Dodaj nowego', 'book', 'kings'),
    'add_new_item' => __('Dodaj nowego sponsora', 'kings'),
    'new_item' => __('Nowy sponsor', 'kings'),
    'edit_item' => __('Edytuj sponsora', 'kings'),
    'view_item' => __('Pokaż sponsora', 'kings'),
    'all_items' => __('Wszyscy sponsorzy', 'kings'),
    'search_items' => __('Znajdź sponsora', 'kings'),
    'parent_item_colon' => __('Sponsor nadrzędny:', 'kings'),
    'not_found' => __('Nie znaleziono sponsorów.', 'kings'),
    'not_found_in_trash' => __('Nie znaleziono sponsorów w koszu.', 'kings')
];
$options = [
    'supports' => ['title', 'thumbnail', 'page-attributes'],
    'capability_type' => 'page',
    'has_archive' => 'sponsorzy',
    'public' => true
];
$sponsor = new PostType($names, $options);
$sponsor->labels($labels);
$sponsor->icon('dashicons-groups');
$sponsor->register();
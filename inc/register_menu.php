<?php
//register nav menu

register_nav_menu( ('main_menu'), __('Main Menu', 'solocoder') );

//Walker nav menu or menu description show

function dp_walker_nav_menu($item_output, $item, $args){

   

    if(!empty($item->description)){
        $link_after = isset($args->link_after) ? $args->link_after : '';
        $item_output = str_replace($link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $link_after . '</a>', $item_output);
    }
    return $item_output;

}

add_filter( 'walker_nav_menu_start_el', 'dp_walker_nav_menu',10,3);


?>
<?php 

function university_post_types(){
    //Event Post Type
    register_post_type("event", array(
        "capability_type" => "event",
        "map_meta_cap" => true,
        "show_in_rest" => true,
        "supports" => array("title", "editor", "excerpt"),
        "has_archive" => true,
        "public" => true,
        "labels" => array(
            "name" => "Events",
            "add_new_item" => "Add New Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
        ),
        "menu_icon" => "dashicons-calendar"
    ));

    //Program Post Type
    register_post_type("program", array(
        "show_in_rest" => true,
        "supports" => array("title"),
        "has_archive" => true,
        "public" => true,
        "labels" => array(
            "name" => "Programs",
            "add_new_item" => "Add New Program",
            "edit_item" => "Edit Program",
            "all_items" => "All Programs",
        ),
        "menu_icon" => "dashicons-awards"
    ));

    //Profesor Post Type
    register_post_type("professor", array(
        "show_in_rest" => true,
        "supports" => array("title", "editor", "thumbnail"),
        "public" => true,
        "labels" => array(
            "name" => "Professors",
            "add_new_item" => "Add New Professors",
            "edit_item" => "Edit Professor",
            "all_items" => "All Professors",
        ),
        "menu_icon" => "dashicons-welcome-learn-more"
    ));

    //Note Post Type
    register_post_type("note", array(
        "capability_type" => "note",
        "map_meta_cap" => true,
        "show_in_rest" => true,
        "supports" => array("title", "editor"),
        "public" => false,
        "show_ui" => true,
        "labels" => array(
            "name" => "Notes",
            "add_new_item" => "Add New Note",
            "edit_item" => "Edit Note",
            "all_items" => "All Notes",
        ),
        "menu_icon" => "dashicons-welcome-write-blog"
    ));

    //Like Post Type
    register_post_type("like", array(
        "supports" => array("title"),
        "public" => false,
        "show_ui" => true,
        "labels" => array(
            "name" => "Likes",
            "add_new_item" => "Add New Like",
            "edit_item" => "Edit Like",
            "all_items" => "All Likes",
        ),
        "menu_icon" => "dashicons-heart"
    ));

}
add_action("init", "university_post_types");


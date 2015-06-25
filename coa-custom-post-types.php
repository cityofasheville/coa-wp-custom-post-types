<?php 
  /**
   * Plugin Name: City of Asheville Custom Post Types
   * Plugin URI: https://github.com/cityofasheville
   * Description: A simple plugin that adds custom post types for the City of Asheville
   * Version: 1.0
   * Author: Cameron Carlyle
   * Author URI: https://github.com/carlyleec
   * License: GPL2
   */

  /*  Copyright 2015  Cameron Carlyle  (email : ccarlyle@ashevillenc.gov)

      This program is free software; you can redistribute it and/or modify
      it under the terms of the GNU General Public License, version 2, as 
      published by the Free Software Foundation.

      This program is distributed in the hope that it will be useful,
      but WITHOUT ANY WARRANTY; without even the implied warranty of
      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
      GNU General Public License for more details.

      You should have received a copy of the GNU General Public License
      along with this program; if not, write to the Free Software
      Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  */

      // Custom Taxonomies
      function coa_custom_taxonomies() {
        
          // Type of Product/Service taxonomy
          $labels = array(
              'name'              => 'Policy Categories',
              'singular_name'     => 'Policy Category',
              'search_items'      => 'Search Policy Categories',
              'all_items'         => 'All Policy Categories',
              'parent_item'       => 'Parent Policy Category',
              'parent_item_colon' => 'Parent Policy Category:',
              'edit_item'         => 'Edit Policy Category',
              'update_item'       => 'Update Policy Category',
              'add_new_item'      => 'Add a new Policy Category',
              'new_item_name'     => 'New Policy Category',
              'menu_name'         => 'Policy Categories',
          );

          $args = array(
              'hierarchical'      => true,
              'labels'            => $labels,
              'show_ui'           => true,
              'show_admin_column' => true,
              'query_var'         => true,
              'rewrite'           => array( 'slug' => 'policy-categories' ),
          );

          register_taxonomy( 'policy-category', array( 'review' ), $args );
      }

      add_action( 'init', 'coa_custom_taxonomies' );

      function coa_custom_posttypes(){

        /* 
          FORM LINKS
        */

        $labels = array(
              'name'               => 'COA Forms',
              'singular_name'      => 'COA Form',
              'menu_name'          => 'COA Forms',
              'name_admin_bar'     => 'COA Form',
              'add_new'            => 'Add New',
              'add_new_item'       => 'Add New COA Form',
              'new_item'           => 'New COA Form',
              'edit_item'          => 'Edit COA Form',
              'view_item'          => 'View COA Form',
              'all_items'          => 'All COA Form',
              'search_items'       => 'Search COA Form',
              'parent_item_colon'  => 'Parent COA Form:',
              'not_found'          => 'No COA Forms found.',
              'not_found_in_trash' => 'No COA Forms found in Trash.',
          );
          
          $args = array(
              'labels'             => $labels,
              'public'             => true,
              'publicly_queryable' => true,
              'show_ui'            => true,
              'show_in_menu'       => true,
              'query_var'          => true,
              'rewrite'            => array( 'slug' => 'coa-forms' ),
              'capability_type'    => 'post',
              'has_archive'        => true,
              'hierarchical'       => false,
              'menu_position'      => 5,
              'menu_icon'          => 'dashicons-forms',
              'supports'           => array( 'title'),
              'taxonomies'         => array('category', 'tag')
          );
          register_post_type( 'coa-forms', $args );

          /* 
            POLICIES
          */

          $labels = array(
              'name'               => 'COA Policies',
              'singular_name'      => 'COA Policy',
              'menu_name'          => 'COA Policies',
              'name_admin_bar'     => 'COA Policy',
              'add_new'            => 'Add New',
              'add_new_item'       => 'Add New COA Policy',
              'new_item'           => 'New COA Policy',
              'edit_item'          => 'Edit COA Policy',
              'view_item'          => 'View COA Policy',
              'all_items'          => 'All COA Policies',
              'search_items'       => 'Search COA Policies',
              'parent_item_colon'  => 'Parent COA Policies:',
              'not_found'          => 'No COA policies found.',
              'not_found_in_trash' => 'No COA policies found in Trash.',
          );
          
          $args = array(
              'labels'             => $labels,
              'public'             => true,
              'publicly_queryable' => true,
              'show_ui'            => true,
              'show_in_menu'       => true,
              'query_var'          => true,
              'rewrite'            => array( 'slug' => 'coa-policies' ),
              'capability_type'    => 'post',
              'has_archive'        => true,
              'hierarchical'       => false,
              'menu_position'      => 5,
              'menu_icon'          => 'dashicons-media-text',
              'supports'           => array( 'title', 'author','editor', 'revisions', 'comments'),
              'taxonomies'         => array( 'policy-category')
          );
          register_post_type( 'coa-policies', $args );

          /* 
            HOW TOS
          */

          $labels = array(
              'name'               => 'COA How-Tos',
              'singular_name'      => 'COA How-To',
              'menu_name'          => 'COA How-Tos',
              'name_admin_bar'     => 'COA How-To',
              'add_new'            => 'Add New',
              'add_new_item'       => 'Add New COA How-To',
              'new_item'           => 'New COA How-To',
              'edit_item'          => 'Edit COA How-To',
              'view_item'          => 'View COA How-To',
              'all_items'          => 'All COA How-Tos',
              'search_items'       => 'Search COA How-Tos',
              'parent_item_colon'  => 'Parent COA How-Tos:',
              'not_found'          => 'No COA how-tos found.',
              'not_found_in_trash' => 'No COA how-tos found in Trash.',
          );
          
          $args = array(
              'labels'             => $labels,
              'public'             => true,
              'publicly_queryable' => true,
              'show_ui'            => true,
              'show_in_menu'       => true,
              'query_var'          => true,
              'rewrite'            => array( 'slug' => 'coa-how-tos' ),
              'capability_type'    => 'post',
              'has_archive'        => true,
              'hierarchical'       => false,
              'menu_position'      => 5,
              'menu_icon'          => 'dashicons-info',
              'supports'           => array( 'title', 'author','editor', 'revisions', 'comments'),
              'taxonomies'         => array( 'category', 'tag')
          );
          register_post_type( 'coa-how-tos', $args );

          /* 
            PROJECTS
          */

          $labels = array(
              'name'               => 'COA Projects',
              'singular_name'      => 'COA Project',
              'menu_name'          => 'COA Projects',
              'name_admin_bar'     => 'COA Project',
              'add_new'            => 'Add New',
              'add_new_item'       => 'Add New COA Project',
              'new_item'           => 'New COA Project',
              'edit_item'          => 'Edit COA Project',
              'view_item'          => 'View COA Project',
              'all_items'          => 'All COA Projects',
              'search_items'       => 'Search COA Projects',
              'parent_item_colon'  => 'Parent COA Projects:',
              'not_found'          => 'No COA projects found.',
              'not_found_in_trash' => 'No COA projects found in Trash.',
          );
          
          $args = array(
              'labels'             => $labels,
              'public'             => true,
              'publicly_queryable' => true,
              'show_ui'            => true,
              'show_in_menu'       => true,
              'query_var'          => true,
              'rewrite'            => array( 'slug' => 'coa-projects' ),
              'capability_type'    => 'page',
              'has_archive'        => true,
              'hierarchical'       => true,
              'menu_position'      => 5,
              'menu_icon'          => 'dashicons-analytics',
              'supports'           => array( 'title','editor', 'revisions', 'comments', 'page-attributes'),
              'taxonomies'         => array( 'category', 'tag')
          );
          register_post_type( 'coa-projects', $args );
      }

      add_action('init', 'coa_custom_posttypes');

      // Flush rewrite rules to add "review" as a permalink slug
      function my_rewrite_flush() {
          my_custom_posttypes();
          flush_rewrite_rules();
      }
      register_activation_hook( __FILE__, 'my_rewrite_flush' );

 ?>
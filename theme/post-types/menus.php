<?php

return array(

  "name" => array(

    "singular" => "Dish",

    "multiple" => "Dishes"

  ),

  "slug" => "dishes",

  "icon" => "f2e7",

  "glance" => true,

  "public" => false,

  "show" => array(

    "menu" => true,

    "ui" => true

  ),

  "supports" => array(

    "title", "thumbnail", "editor"

  ),

  "taxonomies" => array(

    "category"

  ),

  "fields" => function($postType) {

    /**
     * Change the placeholder text for the page title.
     * @since 1.0.0
     */

    add_filter('enter_title_here', function($title) {

      $screen = get_current_screen();
      if("dishes" == $screen->post_type) $title = "Enter dish name";
      return $title;

    });


    /**
     * Add custom meta boxes for the custom post type.
     * @since 1.0.0
     */

    add_action('add_meta_boxes', function() {

      add_meta_box(
        "dish_contact_details",
        "Dish Details",
        "render_dish_details",
        "dishes",
        "normal",
        "high"
      );
  
      function render_dish_details() {
  
        global $post;

        $field_name = "dishes_fields";
        $field_nonce = wp_create_nonce(basename(__FILE__));
        $meta = get_post_meta($post->ID, $field_name, true); ?>

        <input type="hidden" name="<?php echo $field_name; ?>_nonce" value="<?php echo $field_nonce; ?>">

        <div class="post-type-grid">

          <div class="post-type-column">
            <table class="form-table">
              <tbody>
                <tr class="post-type-grid">

                  <td class="post-type-column" style="width:150px">
                  <label for="<?php echo $field_name; ?>[price]">Price</label>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[price]" type="number" min="0.01" step="0.01" max="2500" name="<?php echo $field_name; ?>[price]" value="<?php echo $meta['price'] ?? ''; ?>">
                  </td>

                  <td class="post-type-column">
                    <label for="<?php echo $field_name; ?>[city]">City</label>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[city]" type="text" name="<?php echo $field_name; ?>[city]" value="<?php echo $meta['city'] ?? ''; ?>">
                  </td>

                  <td class="post-type-column">
                    <label for="<?php echo $field_name; ?>[state]">State</label>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[state]" type="text" name="<?php echo $field_name; ?>[state]" value="<?php echo $meta['state'] ?? ''; ?>">
                  </td>

                  <td class="post-type-column">
                    <label for="<?php echo $field_name; ?>[zip]">Zip</label>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[zip]" type="text" name="<?php echo $field_name; ?>[zip]" value="<?php echo $meta['zip'] ?? ''; ?>">
                  </td>

                </tr>

              </tbody>
            </table>
          </div>

        </div>

      <?php }

    });

    add_action("save_post", function($post_id) {

        if(isset($_POST['dishes_fields_nonce'])) {

          /* Verify that the post type nonce exists. */
          if(!wp_verify_nonce($_POST['dishes_fields_nonce'], basename(__FILE__)))
            return $post_id;
    
          /* Verify the autosave condition. */
          if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
            return $post_id;
    
          /* Verify the post type. */
          if("dishes" === $_POST['post_type']) {
    
            if(!current_user_can("edit_page", $post_id))
              return $post_id;
    
            $previous_meta = get_post_meta($post_id, "dishes_fields", TRUE);
            $current_meta  = $_POST['dishes_fields'];
    
            if($current_meta && $current_meta !== $previous_meta)
              update_post_meta($post_id, "dishes_fields", $current_meta);
    
            if("" === $current_meta && $previous_meta)
              delete_post_meta($post_id, "dishes_fields", $previous_meta);
    
          }
    
        }

      });

  }

);
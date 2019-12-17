<?php

return array(

  "name" => array(

    "singular" => "Client",

    "multiple" => "Clients"

  ),

  "slug" => "clients",

  "icon" => "f2bb",

  "glance" => true,

  "public" => false,

  "show" => array(

    "menu" => true,

    "ui" => true

  ),

  "supports" => array(

    "title", "thumbnail"

  ),

  "fields" => function($postType) {

    /**
     * Change the placeholder text for the page title.
     * @since 1.0.0
     */

    add_filter('enter_title_here', function($title) {

      $screen = get_current_screen();
      if("clients" == $screen->post_type) $title = "Enter client name";
      return $title;

    });


    /**
     * Add custom meta boxes for the custom post type.
     * @since 1.0.0
     */

    add_action('add_meta_boxes', function() {

      add_meta_box(
        "client_contact_details",
        "Contact Details",
        "render_client_contact_details",
        "clients",
        "normal",
        "high"
      );
  
      function render_client_contact_details() {
  
        global $post;
      
        $field_name = "clients_fields";
        $field_nonce = wp_create_nonce(basename(__FILE__));
        $meta = get_post_meta($post->ID, $field_name, true); echo print_r($meta, true); ?>

        <input type="hidden" name="<?php echo $field_name; ?>[nonce]" value="<?php echo $field_nonce; ?>">

        <div class="post-type-grid">

          <div class="post-type-column">
            <table class="form-table">
              <tbody>

                <tr>
                  <th scope="row">
                    <label for="<?php echo $field_name; ?>[email]">Email Address</label>
                  </th>
                  <td>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[email]" type="email" name="<?php echo $field_name; ?>[email]">
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <label for="<?php echo $field_name; ?>[url]">Web Address</label>
                  </th>
                  <td>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[url]" type="url" name="<?php echo $field_name; ?>[url]">
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

          <div class="post-type-column">
            <table class="form-table">
              <tbody>

                <tr>
                  <th scope="row">
                    <label for="<?php echo $field_name; ?>[phone]">Phone Number</label>
                  </th>
                  <td>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[phone]" type="tel" name="<?php echo $field_name; ?>[phone]">
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <label for="<?php echo $field_name; ?>[url]">Web Address</label>
                  </th>
                  <td>
                    <input class="regular-text full-width" id="<?php echo $field_name; ?>[url]" type="url" name="<?php echo $field_name; ?>[url]">
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

        </div>

        <div class="post-type-grid">
          <div class="post-type-column">
            <table class="form-table">
              <tbody>

                <tr>
                  <th scope="row">
                    <label for="<?php echo $field_name; ?>[notes]">Notes</label>
                  </th>
                  <td>
                    <textarea class="regular-text full-width" id="<?php echo $field_name; ?>[notes]" name="<?php echo $field_name; ?>[notes]"></textarea>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

      <?php }

    });

  }

);
<?php
add_action('admin_menu', 'origin_menu_page');

if(!function_exists('origin_menu_page')) {
  function origin_menu_page() {
    add_theme_page('Origin Theme Option', 'Theme Option', 'manage_options','origin-theme-option','origin_setting_page');
  }
}

add_action( 'admin_init', 'origin_register_setting');

function origin_register_setting() {
  register_setting( 'origin-group', 'origin-num-slides' );
  register_setting( 'origin-group', 'origin-home-cat' );
}

function origin_setting_page() { ?>
  <div class="wrap">
    <?php screen_icon(); ?>
    <h2>Origin Setting Page</h2>
    <form id="origin_setting" method="post" action="options.php">
      <?php settings_fields( 'origin-group' ) ?>
      <table class="origin_page">
        <tr align="top">
          <th scope="row">Limit Number Slides</th>
          <td><input type="text" value="<?php echo get_option( 'origin-num-slides' )?>" name="origin-num-slides"></td>
        </tr>
        <tr align="top">
          <th scope="row">Home Categories</th>
          <td><input type="text" value="<?php echo get_option( 'origin-home-cat' )?>" name="origin-home-cat"></td>
        </tr>
      </table>
      <?php submit_button();?>
    </form>
  </div>
<?php
}
?>
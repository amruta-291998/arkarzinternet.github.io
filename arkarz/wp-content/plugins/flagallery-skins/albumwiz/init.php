<?php
$ver = '2.0.0';

global $wp;
$settings['galleryID'] = $galleryID;
$settings['post_url'] = add_query_arg($_SERVER['QUERY_STRING'], '', home_url($wp->request));
$settings['module_url'] = plugins_url('/', __FILE__);

wp_enqueue_script('flagallery-albumwiz-skin', plugins_url('/js/albumwiz.js', __FILE__), array(), $ver, true);

?>
<script type="application/json" class="<?php echo 'FlaGallery_'.esc_attr($galleryID); ?>">
	{"settings":<?php echo wp_json_encode($settings);?>, "data":<?php echo wp_json_encode($data);?>}
</script>
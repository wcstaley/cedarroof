<?php
register_nav_menus( 
	array(
		'main_header' => 'Main Navigation',
		'utility_nav' => 'Utility Navigation',
		'footer_nav' => 'Footer Navigation'
	)
);

function debug($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

$shortname = "cedarroof";
$es_pagename = 'cedarroof_theme_options';

$options = array (
	array( "name" => "Affiliates:",
		"desc" => "Enter the URL of your logo image",
		"id" => $shortname."_affiliate_options",
		"type" => "text",
		"std" => ""),
);

function cedarroof_add_admin() {
	global $themename, $options, $es_pagename;
	if ( $_GET['page'] == $es_pagename ) {
		if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
				foreach($value['options'] as $mc_key => $mc_value){
					$up_opt = $value['id'].'_'.$mc_key;
					update_option($up_opt, $_REQUEST[$up_opt] );
				} 
			}
			foreach ($options as $value) {
				if($value['type'] != 'multicheck'){
					if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); }
				}else{
					foreach($value['options'] as $mc_key => $mc_value){
						$up_opt = $value['id'].'_'.$mc_key;
						if( isset( $_REQUEST[ $up_opt ] ) ) { update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); }
					} 
				}
			}
			header("Location: admin.php?page=".$es_pagename."&saved=true");
			die;
		}
	}	
	add_object_page("Theme Options", 'Theme Options', 10, $es_pagename, "cedarroof_options_page");
}

function cedarroof_options_page(){
global $options, $themename, $shortname;
?>
	<div>
		<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
			<h2 id="backtotop"><?php echo $themename; ?> Options</h2>
			<?php if($_REQUEST['saved']) : ?> 
				<div style="clear:both;height:10px;"></div> <div>All good!!! Options has been updated!</div>
			<?php endif; ?>
			<div style="clear:both;height:10px;"></div>
			<?php foreach($options as $value) : ?>
				<?php
				$ta_options = $value['options'];
				?>
				<lable for="<?php echo $value['id']; ?>">List of Affiliates</label><br />
				<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="60" rows="8" style="resize: none;"><?php if(get_settings($value['id']) != ""){ echo stripslashes(get_settings($value['id'])); } else { echo $value['std']; } ?></textarea>
			<?php endforeach; ?>
			<div style="clear:both;"></div>
			<input name="save" type="submit" value="Save changes" />
			<input type="hidden" name="action" value="save" />       
			<div style="clear:both;"></div>
		</form>
	</div>
<?php 
}

add_action('admin_menu', 'cedarroof_add_admin');
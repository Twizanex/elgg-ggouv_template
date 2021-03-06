<?php
/**
 * Elgg login form
 *
 * @package Elgg
 * @subpackage Core
 */
?>

<div>
	<label><?php echo elgg_echo('loginusername'); ?></label>
	<?php echo elgg_view('input/text', array(
		'name' => 'username',
		'class' => 'elgg-autofocus',
		));
	?>
</div>
<div>
	<label><?php echo elgg_echo('password'); ?></label>
	<?php echo elgg_view('input/password', array('name' => 'password')); ?>
</div>

<div class="elgg-foot">

	<?php echo elgg_view('input/submit', array(
		'value' => elgg_echo('login'),
		'id' => 'button-signin',
		'class' => 'elgg-button elgg-button-submit man'
	)); ?>
	
	<?php 
	if (isset($vars['returntoreferer'])) {
		echo elgg_view('input/hidden', array('name' => 'returntoreferer', 'value' => 'true'));
	}
	?>

	<ul class="elgg-menu elgg-menu-general mtm elgg-text-help">
	<?php
		if (elgg_get_config('allow_registration')) {
			echo '<li><a class="registration_link" href="' . elgg_get_site_url() . 'signup">' . elgg_echo('register') . '</a></li>';
		}
	?>
		<li><a class="forgot_link" href="<?php echo elgg_get_site_url(); ?>forgotpassword">
			<?php echo elgg_echo('user:password:lost'); ?>
		</a></li>
	</ul>
	
	<?php echo elgg_view('login/extend'); ?>
</div>

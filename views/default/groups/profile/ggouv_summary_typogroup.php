<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();
?>

<div class="groups-profile clearfix elgg-image-block <?php echo $vars['class'] ?>">
	<div class="elgg-image">
		<div class="groups-profile-iframe">
				<?php echo elgg_view('output/url', array(
						'text' => $group->typolink,
						'value' => $group->typolink,
						'class' => 'external',
						'rel' => 'nofollow'
					));
				?>
			<div>
				<?php echo '<iframe width="1000" height="500" class="" alt="' . $group->typolink . '" src="' . $group->typolink . '" scrolling="no">'; ?></iframe>
			</div>
		</div>
	</div>

	<div class="groups-profile-fields elgg-body">
		<?php echo elgg_view('groups/profile/fields', $vars); ?>
	</div>

	<ul class="groups-stats float">
		<?php echo elgg_view('groups_admins_elections/list_mandats'); ?>
	</ul>
</div>
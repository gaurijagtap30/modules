<div class="save-block-container">
<?php
	$cellclass = 'odd';
	$modpath = drupal_get_path('module','devportal_sitemanager');
	if(!empty($content_array)):?>
		<div class="save-rowheader">
			<div class="head term">Customer List<span class="viewall userfollows"><a href="/customers">View all</a></span></div>
		</div>
	<?php foreach($content_array as $key =>$value):
			$search_path = 'search/site/'.$value->search_term;
			$delete_path = 'delete-searchs/'.$value->sid;
			if(strlen($value->search_term)>15){
				$term = substr(trim($value->search_term),0,15).'...';
			}
			else{
				$term = trim($value->search_term);
			}
	?>
			<div class="save-row">
				<div class="save-cell term"><?php print($term);?></div>
				<div class="save-cell"><?php echo l('<i class="icon-eye-open"></i>', $search_path, $options = array('html' => TRUE,'attributes'=>array('title'=>'Search Again'))); ?></div>
				<div class="save-cell"><?php echo l('<i class="icon-remove"></i>', $delete_path, $options = array('html' => TRUE,'attributes'=>array('title'=>'Delete Term'))); ?></div>
			</div>
	<?php $cellclass = ($cellclass=='odd')?'even':'odd';
	endforeach;
	else:?>
	<div class="save-norows">
				No Records Found
	</div>
	<?php endif;?>
</div>
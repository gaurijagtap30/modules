<div class="save-container">
<?php
	$cellclass = 'odd';
	if(!empty($content_array)):?>
		<div class="save-rowheader">
			<div class="head term">Customer Name</div>
      <div class="head">Preproduction URL</div>
      <div class="head">Production URL</div>
			<div class="head save-action">Actions</div>
		</div>
	<?php foreach($content_array as $key =>$value):
			$customer_path = 'customer/site/'.$value->cid;
			$delete_path = 'delete-customer/'.$value->cid;
	?>
			<div class="save-row">
				<div class="save-cell term <?php echo $cellclass;?>"><?php print($customer_name);?></div>
        <div class="save-cell term"
          <?php echo $cellclass;?>"><?php print($pre_production_url);?>
        </div>
        <div class="save-cell term"
          <?php echo $cellclass;?>"><?php print($production_url);?>
        </div>
        <div class="save-cell <?php echo $cellclass;?>"><?php echo l('Edit',$customer_path);?></div>
				<div class="save-cell <?php echo $cellclass;?>"><?php echo l('Delete',$delete_path);?></div>
			</div>
	<?php $cellclass = ($cellclass=='odd')?'even':'odd';
	endforeach;
	else:?>
	<div class="save-norows">
				No Records Found
	</div>
	<?php endif;?>
</div>
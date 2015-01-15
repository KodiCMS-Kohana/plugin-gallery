<div class="item col-xs-3 col-sm-2 col-md-1" data-id="<?php echo $photo->id; ?>">
	<div class="thumbnail <?php if($category->image == $photo->filename): ?>category-image<?php endif; ?>">
		<?php if($photo->is_image()): ?>
		<?php echo HTML::anchor($photo->full(), HTML::image($photo->thumb()), array('class' => 'fancybox-image', 'rel' => 'gallery')); ?>
		<?php else: ?>
		<?php echo HTML::anchor($photo->filename, __('Video'), array('class' => 'fancybox-image fancybox.iframe', 'rel' => 'gallery')); ?>
		<?php endif; ?>
		
		<div class="thumbnail-options">
			<?php if($category->id > 0 AND $category->image != $photo->filename AND $photo->is_image()): ?>
			<?php echo UI::icon('image option primary-item pull-left'); ?>
			<?php endif; ?>
			<?php echo UI::icon('pencil option edit-item text-success pull-left'); ?>
			<?php echo UI::icon('trash-o option remove-item text-danger pull-right'); ?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="col-xs-3 col-sm-2 col-md-1 item ui-droppable <?php if($category->id > 0): ?>ui-sort<?php endif; ?>" data-id="<?php echo $category->id > 0 ? $category->id : $category->parent_id; ?>" ?>
	<?php if($category->loaded()): ?>
	<?php echo UI::icon('trash option remove-item'); ?>
	<?php endif; ?>
	<div class="thumbnail">
		<?php echo HTML::anchor(URL::backend('photos/category/' . ($category->id > 0 ? $category->id : $category->parent_id)), $category->title); ?>
	</div>
</div>
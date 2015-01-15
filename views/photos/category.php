<div class="col-xs-3 col-sm-2 col-md-1 item ui-droppable <?php if($category->id > 0): ?>ui-sort<?php else: ?>category-up<?php endif; ?>" data-id="<?php echo $category->id > 0 ? $category->id : $category->parent_id; ?>" ?>
	<div class="thumbnail">
		<?php echo HTML::anchor(URL::backend('photos/category/' . ($category->id > 0 ? $category->id : $category->parent_id)), $category->title); ?>
		<?php if($category->loaded()): ?>
		<div class="thumbnail-options">
			<?php echo UI::icon('trash-o option remove-item'); ?>
		</div>
		<?php endif; ?>
	</div>
</div>
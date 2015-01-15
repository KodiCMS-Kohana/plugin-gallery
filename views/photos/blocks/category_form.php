<div id="category-modal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="no-margin-vr"><?php echo __('Settings'); ?></h4>
			</div>
			<form action="#" method="post">
				<?php echo Form::hidden('id', $category->id); ?>
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label" for="category-title"><?php echo __('Category title'); ?></label>
						<div class="controls">
							<input type="text" name="title" id="category-title" class="slug-generator form-control" data-separator="_" value="<?php echo $category->title; ?>" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="category-description"><?php echo __('Category description'); ?></label>
						<div class="controls">
							<textarea name="description" id="category-description" class="form-control"><?php echo $category->description; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="slug-name"><?php echo __('Category slug'); ?></label>
						<div class="controls">
							<input type="text" name="slug" id="slug-name" class="slug form-control" value="<?php echo $category->slug; ?>" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal" aria-hidden="true"><?php echo __('Cancel'); ?></a>
					<button class="create-category-btn btn btn-primary"><?php echo __('Save'); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
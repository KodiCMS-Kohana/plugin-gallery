<div id="image-modal" class="" tabindex="-1" role="dialog">
	<div class="modal-dialog no-margin-vr">
		<div class="modal-content">
			<form action="#" method="post">
				<?php echo Form::hidden('id', $image->id); ?>
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label" for="image-title"><?php echo __('Image title'); ?></label>
						<div class="controls">
							<input type="text" name="title" id="image-title" class="form-control" value="<?php echo $image->title; ?>" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="image-description"><?php echo __('Image description'); ?></label>
						<div class="controls">
							<textarea name="description" id="image-description" class="form-control"><?php echo $image->description; ?></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-close" data-dismiss="modal" aria-hidden="true"><?php echo __('Cancel'); ?></a>
					<button class="btn btn-primary btn-save"><?php echo __('Save'); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
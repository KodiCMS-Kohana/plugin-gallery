<div class="panel-body">
	<div class="form-group form-inline">
		<label class="control-label col-md-3" for="id_ctx"><?php echo __('Category ID (Ctx)'); ?></label>
		<div class="col-md-9">
			<?php echo Form::input( 'id_ctx', $widget->id_ctx, array(
				'class' => 'form-control', 'id' => 'id_ctx'
			) ); ?>
		</div>
	</div>
	
	<div class="form-group form-inline">
		<label class="control-label col-md-3" for="path_ctx"><?php echo __('Category path (Ctx)'); ?></label>
		<div class="col-md-9">
			<?php echo Form::input( 'path_ctx', $widget->path_ctx, array(
				'class' => 'form-control', 'id' => 'path_ctx'
			) ); ?>
		</div>
	</div>
	
	<hr />
	
	<div class="form-group">
		<label class="control-label col-md-3"><?php echo __('Root category'); ?></label>
		<div class="col-md-4">
			<?php echo Form::select('category_id', $categories, $widget->category_id, array('id' => 'category_id')); ?>	
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-offset-3 col-md-9">
			<div class="checkbox">
				<label><?php echo Form::checkbox('with_images', 1, $widget->with_images == 1); ?> <?php echo __('Show only categories with attached image'); ?></label>
			</div>
		</div>
	</div>
</div>
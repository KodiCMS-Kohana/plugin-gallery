<script>
	var CATEGORY_ID = '<?php echo (int) $category->id; ?>';
</script>

<div id="photos" class="panel">
	<div class="panel-heading">
		<?php if (!Request::initial()->is_iframe()): ?>
		<?php echo UI::button(__('Add category'), array(
			'icon' => UI::icon('plus'),
			'class' => 'btn-primary',
			'id' => 'create-category',
			'data-target' => '#category-modal'
		)); ?>
		
		<?php if($category->loaded()): ?>
		<?php echo UI::button(__('Edit category'), array(
			'icon' => UI::icon('cog'),
			'id' => 'edit-category',
			'data-target' => '#category-modal',
			'class' => 'btn btn-primary'
		)); ?>
		<?php endif; ?>
		
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>
	
	<div class="panel-body">
		<?php if( ! Request::initial()->is_iframe()): ?>
		<?php if(!empty($categories)): ?>
		<div class="categories row droppable">
			<?php foreach ($categories as $cat): ?>
				<?php echo View::factory('photos/category', array('category' => $cat)); ?>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
		<?php endif; ?>
	
		<div class="row sortable photos">
			<?php if(!empty($photos)): ?>
			<?php foreach ($photos as $photo): ?>
				<?php echo View::factory('photos/image', array('photo' => $photo, 'category' => $category)); ?>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<br />
<div class="panel">
	<div class="panel-heading">
		<span class="panel-title" data-icon="upload"><?php echo __('Upload photos'); ?></span>
	</div>
	<div class="panel-body">
	<?php 
		echo Form::open('/api-photos.upload', array(
			'enctype' => 'multipart/form-data',
			'method' => Request::POST,
			'class' => 'dropzone',
		));
		echo Form::hidden('token', Security::token()); 
		echo Form::close(); 
	?>
	</div>

	<div class="panel-heading">
		<span class="panel-title" data-icon="upload"><?php echo __('Upload by url'); ?></span>
	</div>

	<?php 
	echo Form::open('/api-photos.from_url', array(
		'method' => Request::POST, 
		'class' => 'form-horizontal',
		'id' => 'upload-video'
	));
	echo Form::hidden('token', Security::token()); 
	echo Form::hidden('category_id', $category->id); 
	?>
	<div class="panel-body">
		<div class="form-group">
			<label class="control-label col-md-3" for="file-url"><?php echo __('Url to file'); ?></label>
			<div class="col-md-9">
				<?php echo Form::input('url', NULL, array('class' => 'form-control')); ?>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<button class="btn btn-primary pull-right"><?php echo __('Upload'); ?></button>
		<div class="clearfix"></div>
	</div>
	<?php echo Form::close(); ?>
</div>

<?php echo View::factory('photos/blocks/category_form', array(
	'category' => ORM::factory('Photo_Category')
)); ?>
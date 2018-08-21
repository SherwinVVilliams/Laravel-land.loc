<div class = 'wrapper container-fluid'>
	<form method = 'POST' action=" <?php echo e(route('pagesEdit',['id' => $data['id']] )); ?>" class = 'horizontal' enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

				<input type="hidden" name="id" value ="<?php echo e($data['id']); ?>">
		<div class = 'col-xs-8'>
			<div class = 'form-group'>
				<h3>Name</h3>
					<input type="text" name="name" value="<?php echo e($data['name']); ?>" class = 'form-control'>
		    </div>
			<br>
			<div class = 'form-group'>
				<h3>Alias</h3>
					<input type="text" name="alias" value="<?php echo e($data['alias']); ?>" class = 'form-control'>
			</div>
			<br>
			<div class = 'form-group'>
				<h3>Text</h3>
					<textarea type = 'text' name = 'text' id = 'editor' class = 'form-control'><?php echo e($data['text']); ?></textarea>
			</div>
			<br>
			<div class = 'form-group'>
				<div>
					<img src = "<?php echo e('/img/'.$data['images']); ?>">
				</div>
				<input type="hidden" name="old_image" value = " <?php echo e($data['images']); ?>">
				<h3><?php echo e($data['images']); ?></h3>
			</div>
			<br>
			<div class = 'form-group'>
				

				<h3>images</h3>
					<input type = 'file' name = 'images' class = 'filestyle' data-buttonName = 'btn-primary' data-buttonText = 'Выберите изображение' >
			</div>
			<br>
			<button type= 'submit' class = 'btn btn-success'>Edit</button>
		</div>
	</form>
</div>
<script>
	CKEDITOR.replace('editor');
</script>
	
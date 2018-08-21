<div class = 'wrapper container-fluid'>
	<form method = 'POST' action=" <?php echo e(route('pagesAdd')); ?>" class = 'horizontal' enctype="multipart/form-data">
		<div class = 'col-xs-8'>
			<div class = 'form-group'>
				<h3>Name</h3>
					<input type="text" name="name" value="<?php echo e(old('name')); ?>" class = 'form-control'>
		    </div>
			<br>
			<div class = 'form-group'>
				<h3>Alias</h3>
					<input type="text" name="alias" value="<?php echo e(old('alias')); ?>" class = 'form-control'>
			</div>
			<br>
			<div class = 'form-group'>
				<h3>Text</h3>
					<textarea type = 'text' name = 'text' id = 'editor' class = 'form-control'><?php echo e(old('text')); ?></textarea>
			</div>
			<br>
			<div class = 'form-group'>
				<h3>images</h3>
					<input type = 'file' name = 'images' class = 'filestyle' data-buttonName = 'btn-primary' data-buttonText = 'Выберите изображение' >
			</div>
			<br>
			<button type= 'submit' class = 'btn btn-success'>Add</button>
		</div>
	</form>
</div>
<script>
	CKEDITOR.replace('editor');
</script>
	
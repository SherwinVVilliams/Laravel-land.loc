<div class = 'wrapper container-fluid'>
	<form method = 'POST' action=" {{ route('pagesAdd') }}" class = 'horizontal' enctype="multipart/form-data">
		<div class = 'col-xs-8'>
			<div class = 'form-group'>
				<h3>Name</h3>
					<input type="text" name="name" value="{{ old('name') }}" class = 'form-control'>
		    </div>
			<br>
			<div class = 'form-group'>
				<h3>Alias</h3>
					<input type="text" name="alias" value="{{ old('alias') }}" class = 'form-control'>
			</div>
			<br>
			<div class = 'form-group'>
				<h3>Text</h3>
					<textarea type = 'text' name = 'text' id = 'editor' class = 'form-control'>{{ old('text') }}</textarea>
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
	
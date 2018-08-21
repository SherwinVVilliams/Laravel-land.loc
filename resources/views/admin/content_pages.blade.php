<div style = "margin: 0px 50px 0px 50px;">

	@if(isset($pages))
		<table class = 'table table-hover table-striped'>
			<thead>
				<tr>
					<th> № </th>
					<th> Имя </th>
					<th> Псевдоним </th>
					<th> Текст </th>
					<th> Дата создания </th>
					<th> Ссылка </th>
					<th> Редактировать </th>
					<th> Удалить </th>
				</tr>
			</thead>
			<tbody>
				@foreach($pages as $k=>$page)
					<tr>
						
						<td>{{ $page->id }}</td>
						<td>{{ $page->name }}</td>
						<td>{{ $page->alias }}</td>
						<td>{{ $page->text }}</td>
						<td>{{ $page->created_at}}</td>
						@if($page->name == 'about us')
							<td><a href ="{{ route('page' , array('name' => 'about')) }}" >{{ $page->name }}</a></td>
						@else
							<td><a href ="{{ route('page' , array('name' => $page->name)) }}">{{ $page->name }}</a></td>
						@endif
						<td><a href ="{{ route('pagesEdit' , array('id' => $page->id)) }}" class = 'btn btn-warning'>Редактировать</a></td>
						<td><a href ="{{ route('pagesDelete' , array('id' => $page->id)) }}" class = 'btn btn-danger'>Удалить</a></td>
						
					<tr>
				@endforeach
			</tbody>
		</table>
	@endif
	<a href = "{{ route('pagesAdd') }}" class = 'btn btn-success'> Добавить </a>
</div>
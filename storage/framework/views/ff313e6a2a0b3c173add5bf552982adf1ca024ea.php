<div style = "margin: 0px 50px 0px 50px;">

	<?php if(isset($pages)): ?>
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
				<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						
						<td><?php echo e($page->id); ?></td>
						<td><?php echo e($page->name); ?></td>
						<td><?php echo e($page->alias); ?></td>
						<td><?php echo e($page->text); ?></td>
						<td><?php echo e($page->created_at); ?></td>
						<?php if($page->name == 'about us'): ?>
							<td><a href ="<?php echo e(route('page' , array('name' => 'about'))); ?>" ><?php echo e($page->name); ?></a></td>
						<?php else: ?>
							<td><a href ="<?php echo e(route('page' , array('name' => $page->name))); ?>"><?php echo e($page->name); ?></a></td>
						<?php endif; ?>
						<td><a href ="<?php echo e(route('pagesEdit' , array('id' => $page->id))); ?>" class = 'btn btn-warning'>Редактировать</a></td>
						<td><a href ="<?php echo e(route('pagesDelete' , array('id' => $page->id))); ?>" class = 'btn btn-danger'>Удалить</a></td>
						
					<tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	<?php endif; ?>
	<a href = "<?php echo e(route('pagesAdd')); ?>" class = 'btn btn-success'> Добавить </a>
</div>
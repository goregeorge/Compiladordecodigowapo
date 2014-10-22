<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);
?>
<div class="span6 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Usuarios', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Usuario', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseas eliminar este proyecto?'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Usuarios', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>View Usuario #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'type' => 'bordered striped',
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'password',
		'login',
		'roles',
	),
)); ?>

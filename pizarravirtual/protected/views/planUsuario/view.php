<?php
/* @var $this PlanUsuarioController */
/* @var $model PlanUsuario */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id,
);
?>
<div class="span6 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Grupos', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Grupo', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Actualizar Grupo', 'url'=>array('update', 'id'=>$model->id), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Eliminar Grupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseas eliminar este proyecto?'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Grupos', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Ver Grupo #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'type' => 'bordered striped',
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idPlan',
		'idUsuario',
	),
)); ?>

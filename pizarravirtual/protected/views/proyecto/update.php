<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);
?>
<div class="span6 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Proyectos', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Proyecto', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Ver Proyecto', 'url'=>array('view', 'id'=>$model->id), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Proyectos', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Actualizar Proyecto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

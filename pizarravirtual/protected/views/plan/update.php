<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Planes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);
?>
<div class="span6 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Planes', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Plan', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Ver Plan', 'url'=>array('view', 'id'=>$model->id), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Planes', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Actualizar Plan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

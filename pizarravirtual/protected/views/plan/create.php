<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Planes'=>array('index'),
	'Crear',
);
?>

<div class="span4 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Planes', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Planes', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Crear Plan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

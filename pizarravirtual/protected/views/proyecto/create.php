<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	'Crear',
);
?>
<div class="span4 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
			'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Proyectos', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Proyectos', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Crear Proyecto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

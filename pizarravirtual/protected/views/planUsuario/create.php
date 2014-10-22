<?php
/* @var $this PlanUsuarioController */
/* @var $model PlanUsuario */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Crear',
);
?>
<div class="span4 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
			'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Grupos', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Grupos', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Crear Grupo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

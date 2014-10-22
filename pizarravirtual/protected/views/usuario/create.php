<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);
?>
<div class="span4 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
			'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Usuarios', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Usuarios', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Crear Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

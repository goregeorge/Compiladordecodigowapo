<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>
<div class="span6 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Usuarios', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Usuario', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Usuarios', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>

<h1>Update Usuario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php
/* @var $this PlanUsuarioController */
/* @var $model PlanUsuario */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Grupos', 'url'=>array('index')),
	array('label'=>'Crear Grupo', 'url'=>array('create')),
	array('label'=>'Ver Grupos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestión de Grupos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Grupos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
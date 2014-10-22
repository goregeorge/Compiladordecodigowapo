<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Manage',
);
?>
<div class="span4 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Usuarios', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Usuario', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>
<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Usuarios</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbExtendedGridView', array(
	'filter' => $model,
	'fixedHeader' => true,
	'type' => 'striped bordered',
	'headerOffset' => 40,
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'responsiveTable' => true,
	'columns'=>array(
		'id',
		'nombre',
		'password',
		'login',
		'roles',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>

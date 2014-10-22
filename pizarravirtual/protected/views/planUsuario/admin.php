<?php
/* @var $this PlanUsuarioController */
/* @var $model PlanUsuario */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Gestión de Grupos',
);
?>
<div class="span4 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Grupos', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Grupo', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
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
	$('#plan-usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Grupos</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php $this->widget('booster.widgets.TbExtendedGridView', array(
	'filter' => $model,
	'fixedHeader' => true,
	'type' => 'striped bordered',
	'headerOffset' => 40,
	'id'=>'plan-usuario-grid',
	'dataProvider'=>$model->search(),
	'responsiveTable' => true,
	'columns'=>array(
		'id',
		'idPlan',
		'idUsuario',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>

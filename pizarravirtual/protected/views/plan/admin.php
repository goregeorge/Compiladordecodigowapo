<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Planes'=>array('index'),
	'Gestion de Planes',
);
?>
<div class="span4 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Planes', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Plan', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
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
	$('#plan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Planes</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php $this->widget('booster.widgets.TbExtendedGridView', array(
	'filter' => $model,
	'fixedHeader' => true,
	'type' => 'striped bordered',
	'headerOffset' => 40,
	'dataProvider'=>$model->search(),
	'id'=>'plan-grid',
	'columns'=>array(
		'id',
		'fecha',
		'folio',
		'idProyecto',
		'idTutor',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>

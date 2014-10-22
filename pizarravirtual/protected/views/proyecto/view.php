<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->id,
);
?>
<div class="span6 pull-right">
	<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
			'items' => array(
					array('label'=>'Listar Proyectos', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Crear Proyecto', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Actualizar Proyecto', 'url'=>array('update', 'id'=>$model->id), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Eliminar Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseas eliminar este proyecto?'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestion de Proyectos', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
			)
		)
	);
	?>
</div>


<h1>Ver Proyecto #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'type' => 'bordered striped',
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
	),
)); ?>

<br>
<br>
<h1>Planes</h1>

<?php
$config = array();
$dataProvider = new CArrayDataProvider($rawData=$model->plans, $config);

$this->widget('booster.widgets.TbGridView', array(
		'type' => 'striped bordered',
    'dataProvider'=>$dataProvider
    , 'columns'=>array(
        'id'
        , 'fecha'
        ,'folio'
        ,'idProyecto'
        ,'idTutor'
//        , array(
//            'class'=>'CButtonColumn'
//            , 'viewButtonUrl'=>'Yii::app()->createUrl("/Cars/view", array("id"=>$data["id"]))'
//            , 'updateButtonUrl'=>'Yii::app()->createUrl("/Cars/update", array("id"=>$data["id"]))'
//            , 'deleteButtonUrl'=>'Yii::app()->createUrl("/Cars/delete", array("id"=>$data["id"]))'
//            )
    )
));


?>

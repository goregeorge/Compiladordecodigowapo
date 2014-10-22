<?php
/* @var $this PlanController */
/* @var $model Plan */

$this->breadcrumbs=array(
	'Plans'=>array('index'),
	$model->id,
);
?>
	<div class="span6 pull-right">
		<?php $this->widget('booster.widgets.TbMenu', array(
					'type' => 'nav',
				'items' => array(
						array('label'=>'Listar Planes', 'url'=>array('index'), 'itemOptions' => array('class' => 'btn')),
						array('label'=>'Crear Plan', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
						array('label'=>'Actualizar Plan', 'url'=>array('update', 'id'=>$model->id), 'itemOptions' => array('class' => 'btn')),
						array('label'=>'Eliminar Plan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseas eliminar este proyecto?'), 'itemOptions' => array('class' => 'btn')),
						array('label'=>'Gestion de Planes', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
				)
			)
		);
		?>
	</div>
<h1>Ver Plan #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'type' => 'bordered striped',
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'folio',
		'idProyecto',
		'idTutor',
	),
)); ?>

<br>
<br>
<h1>Alumnos Asignados</h1>

<?php
$config = array();
$dataProvider = new CArrayDataProvider($rawData=$model->alumnos, $config);

$this->widget('booster.widgets.TbGridView', array(
		'type' => 'striped bordered',
    'dataProvider'=>$dataProvider
    , 'columns'=>array(
        'id'
       ,'nombre'
        ,'login'
//        , array(
//            'class'=>'CButtonColumn'
//            , 'viewButtonUrl'=>'Yii::app()->createUrl("/Cars/view", array("id"=>$data["id"]))'
//            , 'updateButtonUrl'=>'Yii::app()->createUrl("/Cars/update", array("id"=>$data["id"]))'
//            , 'deleteButtonUrl'=>'Yii::app()->createUrl("/Cars/delete", array("id"=>$data["id"]))'
//            )
    )
));


?>

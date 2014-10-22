<?php
/* @var $this PlanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Planes',
);
?>
<div class="row">
	<div class="span4">

		<h1>Planes</h1>

		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
	</div>
	<div class="span4 pull-right">
		<?php $this->widget('booster.widgets.TbMenu', array(
				'type' => 'nav',
				'items' => array(
					array('label'=>'Crear Plan', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
					array('label'=>'Gestión de Planes', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
				)
			)
		);
		?>
	</div>
</div>

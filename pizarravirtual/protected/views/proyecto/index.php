<?php
/* @var $this ProyectoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyectos',
);
?>
<div class="row">
	<div class="span4">
	<h1>Proyectos</h1>

		<?php $this->widget('zii.widgets.CListView', array(
			// 'template' => "{sorter}\n{items}\n{pager}",
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
	</div>
	<div class="span4 pull-right">
		<?php $this->widget('booster.widgets.TbMenu', array(
					'type' => 'nav',
				'items' => array(
						array('label'=>'Crear Proyecto', 'url'=>array('create'), 'itemOptions' => array('class' => 'btn')),
						array('label'=>'Gestion de Proyectos', 'url'=>array('admin'), 'itemOptions' => array('class' => 'btn')),
				)
			)
		);
		?>
	</div>
</div>

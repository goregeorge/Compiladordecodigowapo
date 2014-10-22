<?php
/* @var $this ProyectoController */
/* @var $data Proyecto */
?>

<div class="span6">

	<span class="label label-success"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</span>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>

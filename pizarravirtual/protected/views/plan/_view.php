<?php
/* @var $this PlanController */
/* @var $data Plan */
?>

<div class="view">

	<span class="label label-success"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</span>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folio')); ?>:</b>
	<?php echo CHtml::encode($data->folio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProyecto')); ?>:</b>
	<?php echo CHtml::encode($data->idProyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTutor')); ?>:</b>
	<?php echo CHtml::encode($data->idTutor); ?>
	<br />


</div>

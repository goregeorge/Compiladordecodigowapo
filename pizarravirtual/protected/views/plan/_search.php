<?php
/* @var $this PlanController */
/* @var $model Plan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folio'); ?>
		<?php echo $form->textField($model,'folio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProyecto'); ?>
		<?php echo $form->textField($model,'idProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTutor'); ?>
		<?php echo $form->textField($model,'idTutor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
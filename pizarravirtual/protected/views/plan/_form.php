<?php
/* @var $this PlanController */
/* @var $model Plan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'plan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folio'); ?>
		<?php echo $form->textField($model,'folio'); ?>
		<?php echo $form->error($model,'folio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idProyecto'); ?>
		<?php echo $form->textField($model,'idProyecto'); ?>
		<?php echo $form->error($model,'idProyecto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idTutor'); ?>
		<?php echo $form->textField($model,'idTutor'); ?>
		<?php echo $form->error($model,'idTutor'); ?>
	</div>

	<div class="row buttons">
		<?php
		$this->widget(
				'booster.widgets.TbButton',
				array('buttonType' => 'submit', 'label' => $model->isNewRecord ? 'Create' : 'Save')
		);
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

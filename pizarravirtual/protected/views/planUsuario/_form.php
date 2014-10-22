<?php
/* @var $this PlanUsuarioController */
/* @var $model PlanUsuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'plan-usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"> <span class="required">*</span> Campos requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idPlan'); ?>
		<?php echo $form->textField($model,'idPlan'); ?>
		<?php echo $form->error($model,'idPlan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
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

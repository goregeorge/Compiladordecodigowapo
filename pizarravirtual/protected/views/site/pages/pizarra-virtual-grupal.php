<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Pizarra Virtual General';
$this->breadcrumbs=array(
	'Pizarra Virtual General',
);


$idUsuario = Yii::app()->user->id;
//var_dump($idUsuario);
$planUsuario = PlanUsuario::model()->find('idUsuario = ?', array($idUsuario));
//var_dump($planUsuario);

$idPlan = $planUsuario->idPlan;
//var_dump($idPlan);

?>
<div class="row">
	<div class="span6">
		<iframe
		    width="100%"
		    height="500px"
		    frameborder="0"
		    style="border: 0;"
		    src="<?php echo 'http://codeshare.io/pizarra' . $idPlan; ?>">
		</iframe>
	</div>
	<div class="span4">
		<?php
			$this->widget('MjmChat', array(
			                'title'=>'Pizarra Virtual',
			                'rooms'=>array('grupo' . $idPlan  => 'Grupo ' . $idPlan), // rooms available for current_user
			                'host'=>'http://localhost',
			                'port'=>'3000',
			            )
			);
		?>
	</div>
</div>

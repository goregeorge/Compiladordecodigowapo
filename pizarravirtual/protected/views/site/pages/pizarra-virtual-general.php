<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Pizarra Virtual General';
$this->breadcrumbs=array(
	'Pizarra Virtual General',
);
?>
<div class="row">
	<div class="span6">
		<iframe
		    width="100%"
		    height="500px"
		    frameborder="0"
		    style="border: 0;"
		    src="http://codeshare.io/IwxIt">
		</iframe>
	</div>
	<div class="span4">
		<?php
			$this->widget('MjmChat', array(
			                'title'=>'Pizarra Virtual',
			                'rooms'=>array('general'=>'General'), // rooms available for current_user
			                'host'=>'http://localhost',
			                'port'=>'3000',
			            )
			);
		?>
	</div>
</div>

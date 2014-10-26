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
		    style="border: 0; position: relative"
		    src="http://rextester.com/live/PLYP6849">
		</iframe>

	</div>
	<div id="tapacoso" style="
		background-color: #eeeeee;
		height: 50px;
		z-index: 0;
		position: relative;
		width: 53%;
		"></div>
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

<script type="text/javascript">
	function lol() {
		var text = editor.mirror.getValue();
    	alert(text);
	}
</script>

<div id="mjmChatBlock">
	<div id="mjmChatIcon" title="Open chatroom">
		<span id="mjmChatSlectRoom"><?php echo $title; ?></span>
	</div>
	<ul id="mjmChatRooms">
		<?php
		foreach ($rooms as $roomKey=>$roomValue) {
			echo '<li title="'.$roomKey.'">'.$roomValue.'</li>';
		}
		?>
	</ul>
</div>
<div id="mjmChatRoom">
	<div id="mjmChatRoomBody">
		<ul id="mjmChatMessages"></ul>
	</div>
	<div id="mjmChatRoomSend">
		<textarea rows="3" id="mjmChatMessage"<?php if($messagePlaceHolder) echo ' placeholder="'.$messagePlaceHolder.'"'; ?>></textarea>
		<button class="btn btn-warning" id="mjmChatSend"><?php echo $sendButtonText; ?></button>
	</div>
</div>
Participantes:
<ul id="mjmChatUsersList"></ul>

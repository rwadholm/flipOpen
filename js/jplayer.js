/* Initialize player */
$(document).ready(function(){
	var $current_audio = $('.bookTitle').attr('alt');
	// Local copy of jQuery selectors, for performance.
	var jpPlayTime = $("#jplayer_play_time");
	var jpTotalTime = $("#jplayer_total_time");

	$('div.jp-playlist ul').stop().animate({'opacity':'0.3'});	
	$('div.jp-playlist ul').hover(function(){
		$(this).stop().animate({'opacity':'1.0'});						  
	},function(){
		$(this).stop().animate({'opacity':'0.3'});	
	});

	$("#jquery_jplayer").jPlayer({
		ready: function () {
			this.element.jPlayer('setFile', '/book/audio/'+ $current_audio +'.mp3', '/book/audio/'+ $current_audio +'.ogg').jPlayer('pause');
		},
		volume: 50,
		oggSupport: true
	})
	.jPlayer("onProgressChange", function(loadPercent, playedPercentRelative, playedPercentAbsolute, playedTime, totalTime) {
		jpPlayTime.text($.jPlayer.convertTime(playedTime));
		jpTotalTime.text($.jPlayer.convertTime(totalTime));
	})
	.jPlayer("onSoundComplete", function() {
		this.element.jPlayer("pause");
	});
});
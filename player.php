<div id="player">
   	<div id="jquery_jplayer"></div>
    <div class="jp-single-player">
        <div class="jp-interface">
            <ul class="jp-controls">
                <li id="jplayer_play" class="jp-play">play</li>
                <li id="jplayer_pause" class="jp-pause">pause</li>
                <li id="jplayer_stop" class="jp-stop">stop</li>
                <li id="jplayer_volume_min" class="jp-volume-min">min volume</li>
                <li id="jplayer_volume_max" class="jp-volume-max">max volume</li>
            </ul>
            <div class="jp-progress">
                <div id="jplayer_load_bar" class="jp-load-bar">
                    <div id="jplayer_play_bar" class="jp-play-bar"></div>
                </div>
            </div>
            <div id="jplayer_volume_bar" class="jp-volume-bar">
                <div id="jplayer_volume_bar_value" class="jp-volume-bar-value"></div>
            </div>
            <div id="jplayer_play_time" class="jp-play-time"></div>
            <div id="jplayer_total_time" class="jp-total-time"></div>
        </div>
        <div id="jplayer_playlist" class="jp-playlist">
            <ul>
                <li><span class="bookTitle" alt="<?php echo $current_book."/".$current_book.$current_chapter ?>"><?php echo $bookName." - ".$bookAuthor; ?></span>&nbsp;       
				<?php include("chapters.php") ?>
					
                &nbsp;&nbsp; <a href="bookMenu.php">Book Menu</a>
                </li>
                <li></li>
            </ul>
		</div>
    </div>
</div>
<!doctype html>
<html>
	<head>
	
	</head>
	<body>
		<audio controls autoplay preload="none">
		  <source src="get_audio_ffmpeg.php?id=<?php if(!empty($_GET["id"])) echo htmlspecialchars($_GET["id"], ENT_QUOTES); else echo "dQw4w9WgXcQ";?>" type="audio/mpeg">
		</audio>
	</body>
</html>
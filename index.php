<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="_MQEJn7_y3RbJ7ogF_LLdw7-ZLHcoqhtXRAiSOznf8Y" />

		<link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/res/css/global.css" />
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" style="border: none; margin: 0; padding: 18px 20px; border-radius: 0;" data-toggle="collapse" data-target="#mobile-drop-down-menu">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">
							<span style="color: orange;"><i class="glyphicon glyphicon-menu-right"></i></span>
							<span style="color: dark-gray; font-size: 24px !important;">Isaac.Coffee</span>
						</a>
					</div>
					<div class="navbar-collapse collapse" id="mobile-drop-down-menu">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									Dropdown
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another Action</a></li>
									<li><a href="#">Something Else Here</a></li>
									<li class="divider"></li>
									<li class="dropdown-header"></li>
									<li><a href="#">Separated Link</a></li>
									<li><a href="#">One More Separated Link</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<div class="container main-content">
			<h3>Home</h3>
			<hr />
			<p>
				Java Java Java Java Java Java Java Java Java Java <br /> OOOOOOOOOOOOOOOHHHHHHHHHHHHHHH!
			</p>
			<div style="text-align: center;">
				<div id="music-player"></div>
				<!-- <iframe style="margin: 20px auto; width: 720px; height: 422px;" src="https://www.youtube.com/embed/Hlzgt8MLajA" frameborder="0" allowfullscreen></iframe> -->
				<br />
				<div id="rain-player"></div>
			</div>
			<!-- <iframe id="rain-video" style="height: 300px; width: 300px;" src="https://www.youtube.com/embed/Sv0LwXYAVVg" frameborder="0" allowfullscreen></iframe> -->
		</div>

		<footer>
			<p></p>
		</footer>

		<!-- Footer Scripts -->
		<script src="/libs/jquery/jquery-2.1.3.min.js"></script>
		<script src="/libs/bootstrap/js/bootstrap.min.js"></script>

		<script>

			// 2. This code loads the IFrame Player API code asynchronously.
			var tag = document.createElement('script');

			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			// 3. This function creates an <iframe> (and YouTube player)
			//    after the API code downloads.
			var player1;
			var player2;
			function onYouTubeIframeAPIReady() {
			  player1 = new YT.Player('rain-player', {
			    height: '35px',
			    width: '300px',
			    videoId: 'mQ9OWMsJBTk',
			    events: {
			      'onReady': onPlayer1Ready,
			      'onStateChange': onPlayerStateChange
			    }
			  });

			  player2 = new YT.Player('music-player', {
			  	height: '422px',
			  	width: '720px',
			  	videoId: 'Hlzgt8MLajA',
			  	events: {
			  		'onReady': onPlayer2Ready,
			  		'onStateChange': onPlayerStateChange
			  	}
			  });
			}

			// 4. The API will call this function when the video player is ready.
			function onPlayer1Ready(event) {
				event.target.setVolume(40);
				event.target.playVideo();
			}

			function onPlayer2Ready(event) {
				event.target.setVolume(80);
				event.target.playVideo();
			}

			// 5. The API calls this function when the player's state changes.
			//    The function indicates that when playing a video (state=1),
			//    the player should play for six seconds and then stop.
			var done = false;
			function onPlayerStateChange(event) {
			  if (event.data == YT.PlayerState.PLAYING && !done) {
			    setTimeout(stopVideo, 6000);
			    done = true;
			  }
			}
			function stopVideo() {
			  player.stopVideo();
			}

		</script>
	</body>
</html>
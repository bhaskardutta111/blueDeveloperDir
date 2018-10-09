 
function doFirst(){
	var theVideo = document.getElementById("theVideo");
	var playOrPause = document.getElementById("playPauseButton");

	playOrPause.addEventListener('click', playPause , false);

}

function playPause(){
	if (!theVideo.ended && !theVideo.paused) {
		 theVideo.pause();
		 playOrPause.innerHTML='Play';
	}
	else{  
		theVideo.play();
		playOrPause.innerHTML="Pause";
	}
}



    window.addEventListener('load', doFirst(), false);

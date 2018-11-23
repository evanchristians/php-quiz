window.addEventListener('scroll', function(){
	console.log("hi");
	if (window.pageYOffset > 1) {
		document.getElementById("scroll").style.opacity = 0;
	}
})

document.getElementById("acti").onclick = function() {
	document.getElementById("hide").style.display = "block";
	document.getElementById("hide").style.opacity = "1";
	document.getElementById("wrong").style.display = "none";
	document.getElementById("acti").style.display = "none";
	console.log("mad");
}
 
function stopRKey(evt) { 
	var evt = (evt) ? evt : ((event) ? event : null); 
	var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
	if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 


function play(){
			var audio = document.getElementById("audio");
			audio.play();
			console.log("works");
}		



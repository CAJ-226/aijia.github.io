window.onload = function(){
	function getId(id){
		return document.getElementById(id);
	}
	var imgWeb = getId("imgWeb");
	var textWeb = getId("textWeb");
	var imgTr = getId("imgTr");
	var textTr = getId("textTr");
	var imgCuisine = getId("imgCuisine");
	var textCuisine = getId("textCuisine");

	function showOnScroll(obj){
		obj.style.left = 0 + "px";
		obj.style.visibility = "visible"
	}
	showOnScroll(imgWeb);
	showOnScroll(textWeb);

	window.onscroll = function(){

		if(document.body.scrollTop > 300 || document.documentElement.scrollTop >300){
			showOnScroll(imgTr);
			showOnScroll(textTr);
		}
		if(document.body.scrollTop > 800 || document.documentElement.scrollTop >800){
			showOnScroll(imgCuisine);
			showOnScroll(textCuisine);
		}
	}

}
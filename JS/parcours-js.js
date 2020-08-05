window.onload = function(){
				//点击h3或者+号时，若p没有展示，则+号变-号，展示p，若p展示，则-号变+号，p隐藏
				
				var accordeon = document.getElementById("accordeon");
				accordeon.onclick = function(event){
					event = event || window.event;;
					//事件委派给h3
					if(event.target.className == "title"){
						var div = event.target.nextElementSibling;
						//点击h3，p出现
						
						if(getStyle(div,"max-height") == "0px"){
							div.style.maxHeight = "600px";

						}else{
							div.style.maxHeight = 0;
						}
				}
			}
				function getStyle(obj,name){
					if(window.getComputedStyle){
						return getComputedStyle(obj,null)[name];
					}else{
						obj.currentStyle[name];
					}
				}
		}
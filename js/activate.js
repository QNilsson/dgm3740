// Javascript Document
/* jslint browser:true */


var nav = document.getElementById("primaryNav");
var btns = 
nav.getElementsByClassName("li");
for(var i = 0; i < btns.length; i++){
	btns[i].addEventListener("click", function(){
		var current = 
		document.getElementsByClassName("active");
		current[0].className = 
		current[0].className.replace(" active", "");
		this.className += "active";
	})
}
// "use strict";

// var hrefLocation = location.href; 

// var resultsArray = hrefLocation.split("/");

// var numberOfParts = resultsArray.length;

// var pieceIwant = resultsArray[numberOfParts-1];
// window.console.log('>>>>>>>>'+ pieceIwant);

// var test = document.querySelectorAll("ul#primaryNav li a");

// var i;
// for (i=0; i < test.length; i++) {
// 	var myPage = test[i].getAttribute("href");
// 	window.console.log(myPage);	
	
// 	if (pieceIwant === myPage) {
// 		test[i].parentNode.className ="active";
// 		//test[i].parentNode.parentNode.parentNode.className ="parent";
// 		if (test[i].parentNode.parentNode.parentNode.tagname === "li") {
// 			test[i].parentNode.parentNode.parentNode.className ="parent";
// 		}
// 	} else {
// 		test[i].parentNode.className = "";
// 	} 

	/* trying to get menu item to activate on page load
	if (myPage === "") {
		numberOfParts[0].parentNode.className = "active";
	}
	*/

}//end of loop
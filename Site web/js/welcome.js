


/*sticky header*/
window.onscroll = function() {myFunction()};
var header = document.getElementByID("title_bar") ;
var sticky = header.offsetTop ;
function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	} else {
		header.classList.remove("sticky");
	}
}
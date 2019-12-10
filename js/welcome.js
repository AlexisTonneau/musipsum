


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
function checkFormDS() {
	return  window.confirm('Cette opération est irréversible et supprimera tous les comptes associés')

}
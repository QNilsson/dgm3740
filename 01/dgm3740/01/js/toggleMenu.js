function toggleMenu() {
	document.getElementById("primaryNav").classList.toggle("closed");
}

var x = document.getElementById("hamburgerBtn");
x.onclick = toggleMenu;
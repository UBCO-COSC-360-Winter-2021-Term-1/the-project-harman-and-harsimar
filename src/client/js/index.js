function openNav() {
  document.getElementById("mysidebar").style.width = "17%";
  document.getElementById("main").style.marginLeft = "17%";
  document.getElementById("openbtn").style.display = "none";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mysidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("openbtn").style.display = "block";
} 
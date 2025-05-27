function toggleAddBlog(show) {
   const popup = document.getElementById("blogPopup");
   popup.style.display = show ? "flex" : "none";
}

// Close popup when clicking outside of it
window.onclick = function(event) {
   const popup = document.getElementById("blogPopup");
   if (event.target === popup) {
       popup.style.display = "none";
   }
};

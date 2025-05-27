function toggleAddPhoto(show) {
   const popup = document.getElementById("galleryPopup");
   popup.style.display = show ? "flex" : "none";
}

// Close popup when clicking outside of it
window.onclick = function(event) {
   const popup = document.getElementById("galleryPopup");
   if (event.target === popup) {
       popup.style.display = "none";
   }
};

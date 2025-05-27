function toggleAddAdvert(show) {
   const popup = document.getElementById("advertPopup");
   popup.style.display = show ? "flex" : "none";
}

// Close popup when clicking outside of it
window.onclick = function(event) {
   const popup = document.getElementById("advertPopup");
   if (event.target === popup) {
       popup.style.display = "none";
   }
};

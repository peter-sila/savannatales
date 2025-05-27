function toggleAddDestination(show) {
   const popup = document.getElementById("destinationPopup");
   popup.style.display = show ? "flex" : "none";
}

// Close popup when clicking outside of it
window.onclick = function(event) {
   const popup = document.getElementById("destinationPopup");
   if (event.target === popup) {
       popup.style.display = "none";
   }
};

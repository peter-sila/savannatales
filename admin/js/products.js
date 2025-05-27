function toggleAddProduct(show) {
   const popup = document.getElementById("productPopup");
   popup.style.display = show ? "flex" : "none";
}

// Close popup when clicking outside of it
window.onclick = function(event) {
   const popup = document.getElementById("productPopup");
   if (event.target === popup) {
       popup.style.display = "none";
   }
};

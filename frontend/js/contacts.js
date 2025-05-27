// Fetch and display errors
window.onload = function () {
   fetch('../../backend/errors.json')
      .then(response => response.json())
      .then(errors => {
         let errorContainer = document.getElementById('error-messages');
         errorContainer.innerHTML = ''; // Clear previous errors

         if (Object.keys(errors).length > 0) {
            Object.entries(errors).forEach(([key, error]) => {
               let errorMessage = document.createElement('p');
               errorMessage.textContent = error;
               errorContainer.appendChild(errorMessage);
            });
         }
      })
      .catch(error => console.error('Error fetching errors:', error));
};
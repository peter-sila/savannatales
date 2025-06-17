document.getElementById('btnsearch').addEventListener('click', function () {
   
  const keyword = document.getElementById('searchinput').value.trim().toLowerCase();

  document.querySelectorAll('.highlight').forEach(el => {
    el.classList.remove('highlight');
  });

  if (keyword) {
    const paragraphs = document.querySelectorAll('p');
    let found = false;

    paragraphs.forEach(paragraph => {
      if (paragraph.textContent.toLowerCase().includes(keyword)) {
        paragraph.classList.add('highlight');
        paragraph.scrollIntoView({behavior: 'smooth', block: 'center'});
        found = true;
      }
    });

    if (!found) {
      alert('No matching content found.');
    }
  } else {
    alert('Please enter a keyword to search.');
  }

  const cards = document.querySelectorAll(".testimonials .test-card");
  let currentIndex = 0;

  function updateCardStyles() {
    cards.forEach((card, index) => {
      if (index === currentIndex) {
        card.classList.remove("test-card");
        card.classList.add("center-test-card");
      } else {
        card.classList.remove("center-test-card");
        card.classList.add("test-card");
      }
    });
  }

  function shiftCards() {
    currentIndex = (currentIndex + 1) % cards.length; // Loop back to the start
    updateCardStyles();
  }

  // Initialize styles
  updateCardStyles();

  // Shift cards every 3 seconds
  setInterval(shiftCards, 3000);
  
 });


window.addEventListener('beforeunload', function () {
    navigator.sendBeacon('../../db_backup.php'); // Triggers backup on exit
});



 
 
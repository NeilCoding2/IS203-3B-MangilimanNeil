// Function to handle the button click and transition
function handleButtonClick() {
  const transitionEffect = document.getElementById('transitionEffect');

  // Start the transition effect
  transitionEffect.style.opacity = '1'; // Fade in

  // Wait for the transition to complete before redirecting
  setTimeout(() => {
      window.location.href = 'Register.php'; // Redirect to Register.php
  }, 500); // Match this duration with the CSS transition duration
}

// Event listener for the button
document.getElementById('buttonStart').addEventListener('click', handleButtonClick);

// script.js
let currentSection = 0;
const sections = document.querySelectorAll('.section');

function scrollToSection(index) {
    if (index >= 0 && index < sections.length) {
        sections[index].scrollIntoView({ behavior: 'smooth' });
        currentSection = index;
    }
}

document.addEventListener('wheel', (event) => {
    if (event.deltaY > 0) {
        scrollToSection(currentSection + 1); // Scroll down
    } else {
        scrollToSection(currentSection - 1); // Scroll up
    }
});



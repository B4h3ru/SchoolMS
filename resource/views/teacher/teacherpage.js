// Refactored JavaScript to manage sections dynamically
const sections = document.querySelectorAll('.content-section');
const head = document.getElementById('head');

// Function to hide all sections
function hideAllSections() {
    sections.forEach(section => {
        section.style.display = 'none';
    });
}

// Function to display a specific section
function showSection(sectionId, headerText) {
    hideAllSections(); // Hide all sections
    const section = document.getElementById(sectionId);
    if (section) {
        section.style.display = 'block'; // Show the specific section
    }
    head.innerHTML = headerText; // Update the header text
}

// Initially show the profile section
showSection('profile', 'Teacher Profile');
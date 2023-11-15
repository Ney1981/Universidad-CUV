// Get DOM elements
const rangeThumb = document.getElementById("range-thumb");
const rangeNumber = document.getElementById("range-number");
const rangeLine = document.getElementById("range-line");
const rangeInput = document.getElementById("slider");

// Update the value displayed next to the range input
const updateRangeValue = () => {
  rangeNumber.textContent = rangeInput.value;
};

// Update the position of the range thumb and the width of the range line
const updateRangeVisuals = () => {
  const thumbPosition = rangeInput.value / rangeInput.max;
  const space = rangeInput.offsetWidth - rangeThumb.offsetWidth;

  // Calculate and set the left position of the range thumb
  rangeThumb.style.left = thumbPosition * space + "px";

  // Set the width of the range line based on the input value
  rangeLine.style.width = rangeInput.value + "%";
};

// Add event listener to the range input for real-time updates
rangeInput.addEventListener("input", () => {
  updateRangeValue();
  updateRangeVisuals();
});

// Initialize the range slider
const initializeRangeSlider = () => {
  updateRangeValue();
  updateRangeVisuals();
};

// Call the initialization function
initializeRangeSlider();
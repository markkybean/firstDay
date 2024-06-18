// document.getElementById()
// document.forms.myform.submit()
// parseInt()
// parseFloat()

function addNumbers() {
  const num1Input = document.getElementById("num1");
  const num2Input = document.getElementById("num2");

  const num1 = parseFloat(num1Input.value);
  const num2 = parseFloat(num2Input.value);

  if (isNaN(num1) || isNaN(num2)) {
    alert("Please enter valid numbers!");
    return;
  }

  const confirmation = confirm("Are you sure you want to add these numbers?");

  if (confirmation) {
    const sum = num1 + num2;
    const sumResultElement = document.getElementById("sumResult");
    sumResultElement.textContent = sum;
  } else {
    alert("Addition cancelled."); 
  }
}

const form = document.getElementById("addForm");
form.addEventListener("submit", function (event) {
  event.preventDefault();
  addNumbers();
});

const input = document.getElementById("myInput");
const keyPressedElement = document.getElementById("keyPressed");

input.addEventListener("keydown", function (event) {
 
  keyPressedElement.textContent = event.key;
});

// onkeypress
// onkeydown
// onblur

const blurElement = document.getElementById("blur");
const mouseoverElement = document.getElementById("mouseover");
const mouseoutElement = document.getElementById("out"); 

blurElement.addEventListener("mouseover", function () {
  this.style.filter = "blur(5px)";
});

blurElement.addEventListener("mouseout", function () {
  this.style.filter = "blur(0px)"; 
});

// Mouseover event listener for background color change
mouseoverElement.addEventListener("mouseover", function () {
  this.style.backgroundColor = "lightblue";
});

mouseoverElement.addEventListener("mouseout", function () {
  this.style.backgroundColor = "";
});

// Mouseout event listener to remove background color and blur effect
mouseoutElement.addEventListener("mouseout", function () {
  
  this.style.filter = "blur(5px)"; 
});

mouseoutElement.addEventListener("mouseover", function () {
  this.style.backgroundColor = ""; 
  this.style.filter = "blur(0px)"; 
});


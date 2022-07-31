// This is the DOM manipulation:
const C1 = document.querySelector(".c1");
const C2 = document.querySelector(".c2");
const A1 = document.querySelector(".a1");
const A2 = document.querySelector(".a2");
// This is to select the button and perform operations on them:
const previousday = document.querySelector(".btn-back");
const nextday = document.querySelector(".btn-next");
nextday.addEventListener("click", () => {
  C1.style.display = "none";
  C2.style.display = "flex";
  A1.style.display = "none";
  A2.style.display = "block";
});
previousday.addEventListener("click", () => {
  C2.style.display = "none";
  C1.style.display = "flex";
  A2.style.display = "none";
  A1.style.display = "block";
});

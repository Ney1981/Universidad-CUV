window.addEventListener("scroll", () => {
  var elemento = document.querySelector(".container");

  if (window.scrollY > 80) {
    elemento.classList.add("container__scroll");
  } else {
    elemento.classList.remove("container__scroll");
  }
});

const buttons = document.querySelectorAll(".arrow");

function handleToggle(e) {
  const detailsBlock = e.target.parentElement.parentElement;
  const elementToShow = detailsBlock.querySelectorAll(".body-container");
  // elementToShow.forEach((el) => {
  //   alert(el);
  // });

  for (var i = 0; i < elementToShow.length; i += 1) {
    if (elementToShow[i].classList.contains("hidden")) {
      elementToShow[i].classList.remove("hidden");
      elementToShow[i].classList.add("block");
    } else {
      elementToShow[i].classList.remove("block");
      elementToShow[i].classList.add("hidden");
    }
  }
}

buttons.forEach((button) => {
  button.addEventListener("click", handleToggle);
});

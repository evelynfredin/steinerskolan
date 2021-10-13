const menuBtn = document.querySelector("#menuBtn");
const menuList = document.querySelector("#menuList");
const closeMenu = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
`;

const openMenu = `<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
</svg>`;

menuBtn.addEventListener("click", () => {
  if (menuList.classList.contains("hidden")) {
    menuList.classList.remove("hidden");
    menuBtn.innerHTML = closeMenu;
  } else {
    menuList.classList.add("hidden");
    menuBtn.innerHTML = openMenu;
  }
});

const anchorSelector = 'a[href^="#"]';
const anchorList = document.querySelectorAll(anchorSelector);

anchorList.forEach((link) => {
  link.onclick = function (e) {
    e.preventDefault();
    const destination = document.querySelector(this.hash);
    destination.scrollIntoView({
      behavior: "smooth",
    });
  };
});

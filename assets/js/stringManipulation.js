// ? Detect window resize
let resizeTimer;
let windowWidth = window.innerWidth;

window.addEventListener("resize", onWindowResize);
window.onload = () => {
  promoBanner();
};

function onWindowResize() {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function () {
    windowWidth = window.innerWidth;
    windowHeight = window.innerHeight;
    promoBanner();
  }, 100);
}

// ? Promo Banner text resize
function promoBanner() {
  let promoBannerText = document.querySelector(".promo");

  if (windowWidth < 768 && windowWidth > 301) {
    promoBannerText.innerHTML = `Taking the IMAT in 2023? Get 40% off our courses and classes by enrolling early.`;
  } else if (windowWidth < 300) {
    promoBannerText.innerHTML = `IMAT 2023 Course -> Click Here To Enroll`;
  } else {
    promoBannerText.innerHTML = `Taking the IMAT in 2023? Get 40% off our courses and classes by enrolling early. Click here to find out more`;
  }
}

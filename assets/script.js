document.addEventListener("click", (e) => {
  let handle;
  if (e.target.matches(".handle")) {
    handle = e.target;
  } else {
    handle = e.target.closest(".handle");
  }
  if (handle != null) onHandleClick(handle);
});

function onHandleClick(handle) {
  const slider = handle.closest(".container").querySelector(".slider");
  const sliderIndex = parseInt(
    getComputedStyle(slider).getPropertyValue("--slider-index")
  );

  const totalSlides = slider.querySelectorAll(".image").length;
  let newSliderIndex;

  if (handle.classList.contains("left-handle")) {
    newSliderIndex = (sliderIndex - 1 + totalSlides) % totalSlides;
  }

  if (handle.classList.contains("right-handle")) {
    newSliderIndex = (sliderIndex + 1) % totalSlides;
  }

  slider.style.setProperty("--slider-index", newSliderIndex);
}


const carousel = document.querySelector('.carousel');
const images = document.querySelectorAll('.carousel_inner > img');

images.forEach((image, index) => {
  image.addEventListener('click', () => {
    const scrollAmount = index * (image.offsetWidth + 56); // Adjust based on your gap value
    const maxScroll = carousel.scrollWidth - carousel.offsetWidth;
    const targetScroll = scrollAmount > maxScroll ? 0 : scrollAmount;

    carousel.scroll({
      left: targetScroll,
      behavior: 'smooth',
    });
  });
});

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

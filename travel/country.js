var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  //  Animation

const swipe = document.getElementById("swiper-Btn");

swipe.addEventListener('click', function () {
  // Assuming you have multiple slides with a common class "swiper-slide"
  const currentSlide = document.querySelector('.swiper-slide-active');

  // Target elements within the current slide
  const details = currentSlide.querySelector("#countary-details");
  const about = currentSlide.querySelector("#about-place");
  const rate = currentSlide.querySelector("#rate");
  const card = currentSlide.querySelector("#img-card");
  const trip = currentSlide.querySelector(".trip-details");
  const trip_details = currentSlide.querySelector(".trip-container");

  // Add animation classes
  details.classList.add("animate-details");
  about.classList.add("animate-place-about");
  rate.classList.add("animate-place-about");
  card.classList.add("animate-img");
  trip.classList.add("trip-animate");
  trip_details.classList.add("trip-details-animation");

});



// //////////////////////////////////////


  // Rating 
  document.addEventListener('DOMContentLoaded', function () {
    let stars = document.querySelectorAll('.star');

      stars.forEach((star, index) => {
      star.addEventListener('click', function () {
      // إزالة اللون الذهبي من جميع النجوم
      stars.forEach(s => s.classList.remove('active'));

  // إضافة اللون الذهبي للنجمة المناسبة والتي تسبقها
      for (let i = 0; i <= index; i++) {
      stars[i].classList.add('active');
      }
        // Handle the rating, e.g., send it to the server or update a local variable
      //   alert(`You rated ${index + 1} stars.`);
      });
    });
  });



let filter_btn = document.querySelectorAll('.filter-btn');
let tab_items = document.querySelectorAll('.tab-item');

for (let i = 0; i < filter_btn.length; i++) {
  filter_btn[i].addEventListener('click', function () {
    for (let j = 0; j < filter_btn.length; j++) {
      filter_btn[j].classList.remove('actives');
    }
    let select_tab = filter_btn[i].getAttribute('data-tab');
    filter_btn[i].classList.add('actives');
    for (let t = 0; t < tab_items.length; t++) {
      document.querySelector('.tab-filter-item-container')
      if (tab_items[t].classList.contains(select_tab)) {
        tab_items[t].classList.add('select_tab');
      } else {
        tab_items[t].classList.remove('select_tab');
      }
    }
  });
}

for (let th = 0; th < tab_items.length; th++) {
  document.querySelector('.tab-filter-item-container').style.height =
    tab_items[th].scrollHeight + 'px';
}



function startCounting(targetId, endValue, step, interval) {
  var numberContainer = document.getElementById(targetId);
  var currentNumber = 0;
  function updateNumber() {
    if (currentNumber <= endValue) {
      numberContainer.innerHTML = `${currentNumber}+`;
      currentNumber += step;
    }
  }
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        setInterval(updateNumber, interval);
        observer.disconnect();
      }
    });
  });

  observer.observe(numberContainer);
}

document.addEventListener('DOMContentLoaded', function () {
  startCounting('number-1', 1500, 5, 10);
  startCounting('number-2', 201, 2, 25);
  startCounting('number-3', 10000, 50, 10);
  startCounting('number-4', 100, 1, 30);
});



$(".testmonial_slider_area").owlCarousel({
  autoplay: true,
  slideSpeed:1000,
  items : 3,
  loop: true,
  nav:true,
  navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
  margin: 30,
  dots: true,
  responsive:{
    320:{
      items:1,
      navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
      dots: true,
      nav:true,
    },
    767:{
      items:2
    },
    600:{
      items:2
    },
    1000:{
      items:3
    }
  }
  
});




$(document).ready(function () {
  $(".testimonial-card").hover(
      function () {
          $(this).find(".img-area").addClass("img-hover");
      },
      function () {
          $(this).find(".img-area").removeClass("img-hover");
      }
  );
});




var copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);


function validateInput(input) {
  input.value = input.value.replace(/[^A-Za-z ]/g, '');
}

function validateNumericInput(inputElement) {
  inputElement.value = inputElement.value.replace(/[^0-9\s+\-]/g, '');
}

function validateEmail(input) {
input.value = input.value.replace(/[^a-zA-Z0-9@.]/g, '');
}

function refreshPage() {
  // Get the current URL of the page
  var currentPageUrl = window.location.href;

  // Redirect to the current URL, effectively refreshing the page
  window.location.href = currentPageUrl;
}


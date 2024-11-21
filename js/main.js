document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menu-button');
    const closeButton = document.getElementById('close-button');
    const menuItems = document.getElementById('menu-items');

    menuButton.addEventListener('click', function() {
        menuItems.style.left = '0'; 
    });

    closeButton.addEventListener('click', function() {
        menuItems.style.left = '-100%'; // Oculta el menú
    });
});

// Maximo de caracteres
document.addEventListener("DOMContentLoaded", function() {
    const h3Elements = document.querySelectorAll(".text-blog p"); 
    const maxChars = 85; 
    h3Elements.forEach(function(h3Element) {
      if (h3Element.innerText.length > maxChars) {
        const truncatedText = h3Element.innerText.substring(0, maxChars) + "..."; // Trunca el texto
        h3Element.innerText = truncatedText;
      }
    });
  });
// Maximo de caracteres

document.addEventListener('DOMContentLoaded', function () {
    var swiperRow1 = new Swiper('.swiper-row-1', {
        slidesPerView: 2,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 1200,
            disableOnInteraction: false,
        },
        // Settings for desktop
        breakpoints: {
            640: { // Adjust this breakpoint as needed
                slidesPerView: 6,
                slidesPerColumn: 2,
                slidesPerColumnFill: 'row',
                loop: false, // No loop in desktop mode
                autoplay: false, // No autoplay in desktop mode
                centeredSlides: false,
            }
        }
        
    });
    
    var swiperRow2 = new Swiper('.swiper-row-2', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        
        autoplay: {
            delay: 1200,
            disableOnInteraction: false,
            reverseDirection: true,
        },
        // Settings for desktop
        breakpoints: {
            640: {
                slidesPerView: 6,
                slidesPerColumn: 2,
                slidesPerColumnFill: 'row',
                loop: false,
                autoplay: false,
            }
        }
    });
});
var galleryTop = new Swiper(".gallery-top", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".next-top",
      prevEl: ".prev-top",
    },
  });

var swiperCategories = new Swiper(".swiperCategories", {
    loop: true,
    spaceBetween: 15,
    slidesPerView: 1.2,
    navigation: {
        nextEl: ".next-category",
        prevEl: ".prev-category",
      },
    breakpoints: {
        640: {
            slidesPerView: 3,
        },
        1000: {
            slidesPerView: 4,
        }
        
    }
});

var swiperMain = new Swiper('.main-thumbs', {
    loop: true,
    spaceBetween: 10,
    thumbs: {
      swiper: {
        el: '.swiper-container-thumbs',
        slidesPerView: 3,  // Número de miniaturas visibles
        spaceBetween: 10
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });


document.querySelectorAll('.toggle-submenu').forEach(function(menuItem) {
    menuItem.addEventListener('click', function(event) {
      event.preventDefault(); // Evita que el enlace se comporte como un enlace normal
      const submenu = this.nextElementSibling;
      
      // Alterna la visibilidad del submenú
      if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
      } else {
        submenu.style.display = 'block';
      }
    });
  });
        

 document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.banner');
    const brightSpot = document.querySelector('.hover-circle');

    container.addEventListener('mousemove', function(e) {
        brightSpot.style.display = 'block'; // Asegura que se muestra
        const rect = container.getBoundingClientRect();
        const x = e.clientX - rect.left - brightSpot.offsetWidth / 2;
        const y = e.clientY - rect.top - brightSpot.offsetHeight / 2;
        brightSpot.style.left = `${x}px`;
        brightSpot.style.top = `${y}px`;
    });

    container.addEventListener('mouseleave', function() {
        brightSpot.style.display = 'none';  // Oculta cuando el cursor sale
    });
});



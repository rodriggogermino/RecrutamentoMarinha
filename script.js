/* #### SIDE MENU #### */
const barsIcon = document.getElementById('barsIcon');
const sideMenu = document.getElementById('sideMenu');

barsIcon.addEventListener('click', function() {
    sideMenu.classList.toggle('active');
});

document.addEventListener('click', function(event) {
    if (!sideMenu.contains(event.target) && !barsIcon.contains(event.target)) {
        sideMenu.classList.remove('active');
    }
});

/* #### SEARCH BAR #### */
const searchIconsWrapper = document.getElementById('searchIcons'); 
const searchBar = document.getElementById('barraPesquisa');

searchIconsWrapper.addEventListener('click', function() {
    searchBar.classList.toggle('active');
});

document.addEventListener('click', function(event) {
    if (!searchBar.contains(event.target) && !searchIconsWrapper.contains(event.target)) {
        searchBar.classList.remove('active');
    }
});

/* ### MOBILE SEARCH BAR ### */
function openNav() {
  document.getElementById("searchMobile").style.width = "100%";
}
function closeNav() {
  document.getElementById("searchMobile").style.width = "0";
}

/* #### MOSTRA NAV / SIDE BUTTONS EM SCROLL #### */
const nav = document.querySelector('nav');
const sideButtons = document.getElementById('sideButtons');
const scrollSnapArticle = document.querySelector('.scrollSnap');

function isMobileDevice() {
    return window.innerWidth <= 600;
}

function updateNavVisibility() {
    const isFirstPage = scrollSnapArticle.scrollTop < window.innerHeight;
    
    if (isMobileDevice()) {
        nav.style.display = 'flex';
        sideButtons.style.display = isFirstPage ? 'none' : 'flex';
    } else {
        nav.style.display = isFirstPage ? 'none' : 'flex';
        sideButtons.style.display = isFirstPage ? 'none' : 'flex';
    }
}

scrollSnapArticle.addEventListener('scroll', updateNavVisibility);
window.addEventListener('resize', updateNavVisibility);
updateNavVisibility();

document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.destaquesSlide');
    const btnNext = document.querySelector('.btnNext');
    const btnPrev = document.querySelector('.btnPrevious');
    
    let currentIndex = 0;
    
    const maxVisible = 3;
    const translateStep = 15;
    const scaleStep = 0.15;
    const brightnessStep = 0.3; 

    function updateSlides() {
        slides.forEach((slide, index) => {
            let offset = index - currentIndex;
            if (offset < 0) {
                offset += slides.length; 
            }
            slide.style.pointerEvents = offset === 0 ? 'auto' : 'none';

            if (offset === 0) {
                slide.style.transform = `translateX(0) scale(1)`;
                slide.style.zIndex = 100;
                slide.style.filter = `brightness(1)`;
                slide.style.opacity = 1;
                
            } else if (offset <= maxVisible) {
                slide.style.transform = `translateX(-${offset * translateStep}%) scale(${1 - (offset * scaleStep)})`;
                slide.style.zIndex = 100 - offset;
                slide.style.filter = `brightness(${1 - (offset * brightnessStep)})`;
                slide.style.opacity = 1;
                
            } else {
                slide.style.transform = `translateX(-${(maxVisible + 1) * translateStep}%) scale(${1 - ((maxVisible + 1) * scaleStep)})`;
                slide.style.zIndex = 0;
                slide.style.opacity = 0;
            }
        });
    }

    btnNext.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlides();
    });

    btnPrev.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlides();
    });

    updateSlides();
});

document.getElementById('btnEnviar').addEventListener('click', function () {
  const emailInput = document.getElementById('email');
  const email = emailInput.value.trim();
  const msg = document.getElementById('successMsg');

  // Validate email
  if (!email || !email.includes('@')) {
    emailInput.style.borderColor = '#CC0000';
    emailInput.focus();
    return;
  }

  // Success state
  emailInput.style.borderColor = '';
  msg.style.display = 'block';
  this.disabled = true;
  this.style.opacity = '0.65';
  this.textContent = 'Enviado ✓';
});

// Reset border on input
document.getElementById('email').addEventListener('input', function () {
  this.style.borderColor = '';
});
// Script para o comportamento da Accordion
document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        // Fecha todos
        document.querySelectorAll('.accordion-header').forEach(btn => btn.setAttribute('aria-expanded', 'false'));
        // Abre o selecionado se estava fechado
        if (!expanded) {
            button.setAttribute('aria-expanded', 'true');
        }
    });
});

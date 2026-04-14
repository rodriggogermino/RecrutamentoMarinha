/* #### SIDE MENU #### */
const barsIcon = document.getElementById('barsIcon');
const sideMenu = document.getElementById('sideMenu');

if (barsIcon && sideMenu) {
    barsIcon.addEventListener('click', function() {
        sideMenu.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        if (!sideMenu.contains(event.target) && !barsIcon.contains(event.target)) {
            sideMenu.classList.remove('active');
        }
    });
}

/* #### SEARCH BAR #### */
const searchIconsWrapper = document.getElementById('searchIcons'); 
const searchBar = document.getElementById('barraPesquisa');

if (searchIconsWrapper && searchBar) {
    searchIconsWrapper.addEventListener('click', function() {
        searchBar.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        if (!searchBar.contains(event.target) && !searchIconsWrapper.contains(event.target)) {
            searchBar.classList.remove('active');
        }
    });
}

/* ### MOBILE SEARCH BAR ### */
function openNav() {
  const nav = document.getElementById("searchMobile");
  if (nav) {
    nav.style.width = "100%"
  }
}
function closeNav() {
  const nav = document.getElementById("searchMobile");
  
  if (nav) {
    nav.style.width = "0%"
  }
}

/* #### MOSTRA NAV / SIDE BUTTONS EM SCROLL / SCROLL IMEDIATO PARA SECÇÃO #### */
const nav = document.querySelector('nav');
const sideButtons = document.getElementById('sideButtons');
const scrollSnapArticle = document.querySelector('.scrollSnap');

function isMobileDevice() {
    return window.innerWidth <= 600;
}

function updateNavVisibility() {
    if (!scrollSnapArticle || !nav || !sideButtons) return; // Safety check

    const isFirstPage = scrollSnapArticle.scrollTop < window.innerHeight;
    
    if (isMobileDevice()) {
        nav.style.display = 'flex';
        sideButtons.style.display = isFirstPage ? 'none' : 'flex';
    } else {
        nav.style.display = isFirstPage ? 'none' : 'flex';
        sideButtons.style.display = isFirstPage ? 'none' : 'flex';
    }
}

if (scrollSnapArticle) {
    scrollSnapArticle.addEventListener('scroll', updateNavVisibility);
    window.addEventListener('resize', updateNavVisibility);
    updateNavVisibility();
}

/* #### CHATBOT #### */
document.addEventListener("DOMContentLoaded", () => {
    const chatbotBtn = document.getElementById('chatbotBtn');
    const chatbotCloseBtn = document.getElementById('minimizeIcon');
    const chatbot = document.getElementById('chatbotDiv'); 

    if (!chatbotBtn || !chatbot) return;
    chatbotBtn.addEventListener('click', function(event) {
        event.preventDefault();
        chatbot.classList.toggle('show');
    });
    if (chatbotCloseBtn) {
        chatbotCloseBtn.addEventListener('click', function() {
            chatbot.classList.remove('show');
        });
    }
});

/* #### CARROSSEL (Destaques) #### */
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.destaquesSlide');
    const btnNext = document.getElementById('destaquesBtnNext');
    const btnPrev = document.getElementById('destaquesBtnPrev');

    if (slides.length === 0 || !btnNext || !btnPrev) return;

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

/* #### DROPDOWN #### */
document.addEventListener("DOMContentLoaded", () => {
  const dropdownContainers = document.querySelectorAll(".custom-dropdown");
  if (dropdownContainers.length === 0) return;
  dropdownContainers.forEach(container => {
    const btn = container.querySelector(".dropdown-btn");
    const optionsList = container.querySelector(".dropdown-options");
    const options = container.querySelectorAll(".option");
    btn.addEventListener("click", (e) => {
      document.querySelectorAll(".dropdown-options").forEach(list => {
        if (list !== optionsList) list.classList.remove("show");
      });
      
      optionsList.classList.toggle("show");
    });

    options.forEach(option => {
      option.addEventListener("click", (e) => {
        btn.innerHTML = `${e.target.innerText} 
          <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L4 4L7 1" stroke="#182439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>`;
        options.forEach(opt => opt.classList.remove("selected"));
        e.target.classList.add("selected");
        optionsList.classList.remove("show");
      });
    });
  });
  window.addEventListener("click", (e) => {
    if (!e.target.matches('.dropdown-btn') && !e.target.closest('.dropdown-btn')) {
      document.querySelectorAll('.dropdown-options').forEach(list => {
        list.classList.remove('show');
      });
    }
  });
});

/* #### SLIDES ONDE ESTAMOS #### */
document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById('slideshow-OndeEstamos');
    const track = document.getElementById('cardsOndeEstamos');
    const nav = document.getElementById('nav-OndeEstamos');
    const btnPrev = document.getElementById('btnPrev-OndeEstamos');
    const btnNext = document.getElementById('btnNext-OndeEstamos');

    let currentIndex = 0;
    let visibleCardsCount = 1;

    function updateSlider() {
        if (!track || !wrapper) return;

        wrapper.style.width = '100%';
        wrapper.style.maxWidth = '100%';

        const cards = document.querySelectorAll('.cardOndeEstamos');
        if (cards.length === 0) return;

        const availableWidth = wrapper.parentElement.clientWidth; 
        const cardWidth = cards[0].getBoundingClientRect().width;
        const gap = parseFloat(window.getComputedStyle(track).gap) || 0;

        visibleCardsCount = Math.floor((availableWidth + gap) / (cardWidth + gap));
        
        if (visibleCardsCount < 1) visibleCardsCount = 1;
        if (visibleCardsCount > cards.length) visibleCardsCount = cards.length;

        if (visibleCardsCount === cards.length) {
            if (nav) nav.style.display = 'none';
            track.style.justifyContent = 'center';
        } else {
            if (nav) nav.style.display = 'flex';
            track.style.justifyContent = 'flex-start';
        }

        const exactWidth = (visibleCardsCount * cardWidth) + ((visibleCardsCount - 1) * gap) - 2;
        wrapper.style.width = `${exactWidth}px`;
        wrapper.style.maxWidth = `${exactWidth}px`;

        moveTrack();
    }

    function moveTrack() {
        const cards = document.querySelectorAll('.cardOndeEstamos');
        if (cards.length === 0) return;

        const cardWidth = cards[0].getBoundingClientRect().width;
        const gap = parseFloat(window.getComputedStyle(track).gap) || 0;

        const maxIndex = cards.length - visibleCardsCount;
        if (currentIndex > maxIndex) currentIndex = maxIndex;
        if (currentIndex < 0) currentIndex = 0;

        const moveAmount = (cardWidth + gap) * currentIndex;
        track.style.transform = `translateX(-${moveAmount}px)`;
    }

    function slide(direction) {
        const cards = document.querySelectorAll('.cardOndeEstamos');
        const maxIndex = cards.length - visibleCardsCount;

        if (maxIndex <= 0) return; 

        currentIndex += direction;

        if (currentIndex > maxIndex) {
            currentIndex = 0; 
        } else if (currentIndex < 0) {
            currentIndex = maxIndex; 
        }

        moveTrack();
    }

    if (btnNext) btnNext.addEventListener('click', () => slide(1));
    if (btnPrev) btnPrev.addEventListener('click', () => slide(-1));

    window.addEventListener('resize', updateSlider);
    setTimeout(updateSlider, 150);
});

/* # */
/* # */
/* # */
/* # */
/* # */
/* # */
/* # */
/* # */
/* #### APP #### */
const btnEnviar = document.getElementById('btnEnviar');
const emailInput = document.getElementById('email');

if (btnEnviar && emailInput) {
    btnEnviar.addEventListener('click', function () {
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
      if (msg) msg.style.display = 'block';
      this.disabled = true;
      this.style.opacity = '0.65';
      this.textContent = 'Enviado ✓';
    });

    // Reset border on input
    emailInput.addEventListener('input', function () {
      this.style.borderColor = '';
    });
}
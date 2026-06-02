/* #### GIF PÁGINA A CARREGAR #### */
const loader = document.getElementById('loader');

if (loader) {
    window.addEventListener('load', function() {
        if (!sessionStorage.getItem('loaderVisto')) {
            $('#loader').fadeOut(500);
            sessionStorage.setItem('loaderVisto', 'sim');
        } else {
            loader.style.display = 'none';
        }
    });
}
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
const sideButtons = document.getElementById('sideButtons');
const scrollSnapArticle = document.querySelector('.scrollSnap');

function isMobileDevice() {
    return window.innerWidth <= 600;
}

function updateNavVisibility() {
    if (!scrollSnapArticle || !sideButtons) return;

    const isFirstPage = scrollSnapArticle.scrollTop < window.innerHeight;

    if (isMobileDevice()) {
        sideButtons.style.display = isFirstPage ? 'none' : 'flex';
    } else {
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

/* #### CARROSSEL ONDE ESTAMOS #### */
document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById('slideshowOndeEstamos');
    const track = document.getElementById('cardsOndeEstamos');
    const btnPrev = document.getElementById('btnPrevOnde');
    const btnNext = document.getElementById('btnNextOnde');
    const buttonsContainer = document.getElementById('buttonsOndeEstamos');

    if (!wrapper || !track || !btnPrev || !btnNext || !buttonsContainer) return;

    const slides = track.querySelectorAll('.cardOndeEstamos');
    if (slides.length === 0) return;

    let currentIndex = 0;
    let visibleCardsCount = 4;

    function updateOndeEstamosSlider() {
        const availableWidth = wrapper.parentElement.clientWidth;
        const cardWidth = slides[0].getBoundingClientRect().width;
        const gapStr = window.getComputedStyle(track).gap;
        const gap = gapStr !== 'normal' ? parseFloat(gapStr) : 0;

        visibleCardsCount = Math.floor((availableWidth + gap) / (cardWidth + gap));
        if (visibleCardsCount < 1) visibleCardsCount = 1;
        if (visibleCardsCount > slides.length) visibleCardsCount = slides.length;

        const exactWidth = (visibleCardsCount * cardWidth) + ((visibleCardsCount - 1) * gap);
        wrapper.style.width = `${exactWidth}px`;
        track.style.justifyContent = 'flex-start';
        if (visibleCardsCount >= slides.length) {
            buttonsContainer.style.display = 'none';
            currentIndex = 0;
        } else {
            buttonsContainer.style.display = 'flex';
            const maxIndex = slides.length - visibleCardsCount;
            if (currentIndex > maxIndex) currentIndex = Math.max(0, maxIndex);
            if (currentIndex < 0) currentIndex = 0;
        }
        const moveAmount = (cardWidth + gap) * currentIndex;
        track.style.transform = `translateX(-${moveAmount}px)`;
    }
    btnNext.addEventListener('click', () => {
        const maxIndex = slides.length - visibleCardsCount;
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateOndeEstamosSlider();
        }
    });
    btnPrev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateOndeEstamosSlider();
        }
    });
    window.addEventListener('resize', updateOndeEstamosSlider);
    setTimeout(updateOndeEstamosSlider, 150);
});

/* #### CARROSSEL TESTEMUNHOS #### */
document.addEventListener("DOMContentLoaded", () => {
    const slideshowContainer = document.getElementById('slideshowTestemunhos');
    const track = document.getElementById('cardsTestemunhos');
    const btnPrev = document.querySelector('#btnSlidesTestemunhos .btnPrevious');
    const btnNext = document.querySelector('#btnSlidesTestemunhos .btnNext');

    if (!slideshowContainer || !track || !btnPrev || !btnNext) return;

    let currentIndex = 0;
    let visibleCardsCount = 1;

    function updateTestemunhosSlide() {
        const slides = track.querySelectorAll('.figureTestemunhos');
        if (slides.length === 0) return;

        slideshowContainer.style.width = '100%';
        slideshowContainer.style.maxWidth = '100%';

        const availableWidth = slideshowContainer.parentElement.clientWidth;
        const cardWidth = slides[0].getBoundingClientRect().width;

        const gap = parseFloat(window.getComputedStyle(track).gap) || 0;
        const paddingLeft = parseFloat(window.getComputedStyle(track).paddingLeft) || 0;

        visibleCardsCount = Math.floor((availableWidth - paddingLeft + gap) / (cardWidth + gap));

        if (visibleCardsCount < 1) visibleCardsCount = 1;
        if (visibleCardsCount > 3) visibleCardsCount = 3;
        if (visibleCardsCount > slides.length) visibleCardsCount = slides.length;

        const exactWidth = paddingLeft + (visibleCardsCount * cardWidth) + ((visibleCardsCount - 1) * gap) - 2;

        slideshowContainer.style.width = `${exactWidth}px`;
        slideshowContainer.style.maxWidth = `${exactWidth}px`;

        const maxIndex = slides.length - visibleCardsCount;
        if (currentIndex > maxIndex) currentIndex = Math.max(0, maxIndex);
        if (currentIndex < 0) currentIndex = 0;

        const moveAmount = (cardWidth + gap) * currentIndex;
        track.style.transform = `translateX(-${moveAmount}px)`;
    }

    function slideTestemunho(direction) {
        const slides = track.querySelectorAll('.figureTestemunhos');
        const maxIndex = slides.length - visibleCardsCount;

        if (maxIndex <= 0) return;

        currentIndex += direction;

        if (currentIndex > maxIndex) {
            currentIndex = 0;
        } else if (currentIndex < 0) {
            currentIndex = maxIndex;
        }

        updateTestemunhosSlide();
    }

    btnNext.addEventListener('click', () => slideTestemunho(1));
    btnPrev.addEventListener('click', () => slideTestemunho(-1));

    window.addEventListener('resize', updateTestemunhosSlide);
    setTimeout(updateTestemunhosSlide, 150);
});

/* #### CARROSSEL PROFISSÕES SCROLL #### */
document.addEventListener("DOMContentLoaded", () => {
    const slider = document.getElementById('slideshowProfissoes');

    if (!slider) return;

    let isDown = false;
    let startX;
    let scrollLeft;
    let isDragging = false;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        isDragging = false;
        slider.style.cursor = 'grabbing';

        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;

        slider.style.scrollBehavior = 'auto';
        slider.style.scrollSnapType = 'none';
    });

    slider.addEventListener('mouseleave', () => {
        if (!isDown) return;
        isDown = false;
        slider.style.cursor = 'grab';
        slider.style.scrollBehavior = 'smooth';
        slider.style.scrollSnapType = 'x mandatory';
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.style.cursor = 'grab';
        slider.style.scrollBehavior = 'smooth';
        slider.style.scrollSnapType = 'x mandatory';
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;

        isDragging = true;
        e.preventDefault();

        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;
    });

    slider.addEventListener('click', (e) => {
        if (isDragging) {
            e.preventDefault();
        }
    });
});

/* #### CARROSSEL PREPARA-TE #### */
document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById('slideshowPreparate');
    const track = document.getElementById('cardsPreparate');
    const btnPrev = document.getElementById('btnPrevPrep');
    const btnNext = document.getElementById('btnNextPrep');
    const buttonsContainer = document.getElementById('buttonsPreparate');

    if (!wrapper || !track || !btnPrev || !btnNext || !buttonsContainer) return;

    const slides = track.querySelectorAll('.cardPreparate');
    if (slides.length === 0) return;

    let currentIndex = 0;
    let visibleCardsCount = 4;

    function updatePreparateSlider() {
        const availableWidth = wrapper.parentElement.clientWidth;
        const cardWidth = slides[0].getBoundingClientRect().width;
        const gapStr = window.getComputedStyle(track).gap;
        const gap = gapStr !== 'normal' ? parseFloat(gapStr) : 0;

        visibleCardsCount = Math.floor((availableWidth + gap) / (cardWidth + gap));
        if (visibleCardsCount < 1) visibleCardsCount = 1;
        if (visibleCardsCount > slides.length) visibleCardsCount = slides.length;

        const exactWidth = (visibleCardsCount * cardWidth) + ((visibleCardsCount - 1) * gap);
        wrapper.style.width = `${exactWidth}px`;
        track.style.justifyContent = 'flex-start';

        if (visibleCardsCount >= slides.length) {
            buttonsContainer.style.display = 'none';
            currentIndex = 0;
        } else {
            buttonsContainer.style.display = 'flex';
            const maxIndex = slides.length - visibleCardsCount;
            if (currentIndex > maxIndex) currentIndex = Math.max(0, maxIndex);
            if (currentIndex < 0) currentIndex = 0;
        }

        const moveAmount = (cardWidth + gap) * currentIndex;
        track.style.transform = `translateX(-${moveAmount}px)`;
    }

    btnNext.addEventListener('click', () => {
        const maxIndex = slides.length - visibleCardsCount;
        if (currentIndex < maxIndex) {
            currentIndex++;
            updatePreparateSlider();
        }
    });

    btnPrev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updatePreparateSlider();
        }
    });

    window.addEventListener('resize', updatePreparateSlider);
    setTimeout(updatePreparateSlider, 150);
});

/* #### CARROSSEL A TUA CARREIRA #### */
document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById('slideshowCarreira');
    const track = document.getElementById('caixasCarreira');
    const btnPrev = document.getElementById('btnPrevCarreira');
    const btnNext = document.getElementById('btnNextCarreira');
    const buttonsContainer = document.getElementById('buttonsCarreira');

    if (!wrapper || !track || !btnPrev || !btnNext || !buttonsContainer) return;

    const slides = track.querySelectorAll('.caixaCarreira');
    if (slides.length === 0) return;

    let currentIndex = 0;
    let visibleCardsCount = 3;

    function updateCarreiraSlider() {
        const availableWidth = wrapper.parentElement.clientWidth;
        const cardWidth = slides[0].getBoundingClientRect().width;
        const gapStr = window.getComputedStyle(track).gap;
        const gap = gapStr !== 'normal' ? parseFloat(gapStr) : 0;

        visibleCardsCount = Math.floor((availableWidth + gap) / (cardWidth + gap));
        if (visibleCardsCount < 1) visibleCardsCount = 1;
        if (visibleCardsCount > slides.length) visibleCardsCount = slides.length;

        const exactWidth = (visibleCardsCount * cardWidth) + ((visibleCardsCount - 1) * gap);
        wrapper.style.width = `${exactWidth}px`;
        track.style.justifyContent = 'flex-start';

        if (visibleCardsCount >= slides.length) {
            buttonsContainer.style.display = 'none';
            currentIndex = 0;
        } else {
            buttonsContainer.style.display = 'flex';
            const maxIndex = slides.length - visibleCardsCount;
            if (currentIndex > maxIndex) currentIndex = Math.max(0, maxIndex);
            if (currentIndex < 0) currentIndex = 0;
        }

        const moveAmount = (cardWidth + gap) * currentIndex;
        track.style.transform = `translateX(-${moveAmount}px)`;
    }

    btnNext.addEventListener('click', () => {
        const maxIndex = slides.length - visibleCardsCount;
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarreiraSlider();
        }
    });

    btnPrev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarreiraSlider();
        }
    });

    window.addEventListener('resize', updateCarreiraSlider);
    setTimeout(updateCarreiraSlider, 150);
});

/* #### CARROSSEL DOCUMENTAÇÃO #### */
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.caixaDocumentacao');
    const btnNext = document.getElementById('btnNextCarreira');
    const btnPrev = document.getElementById('btnPrevCarreira');

    if (slides.length === 0 || !btnNext || !btnPrev) return;

    let currentIndex = 0;

    const maxVisible = 2;
    const translateStep = 12;
    const scaleStep = 0.12;
    const brightnessStep = 0.4;

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
                slide.style.transform = `translateX(${offset * translateStep}%) scale(${1 - (offset * scaleStep)})`;
                slide.style.zIndex = 100 - offset;
                slide.style.filter = `brightness(${1 - (offset * brightnessStep)})`;
                slide.style.opacity = 1;

            } else {
                slide.style.transform = `translateX(${(maxVisible + 1) * translateStep}%) scale(0.5)`;
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
/* #### CONSULTAR PARAMETROS DOCUMENTAÇÃO #### */
document.addEventListener("DOMContentLoaded", () => {
    const consultarBtns = document.querySelectorAll('.consultarParamBtn');

    consultarBtns.forEach(btn => {
        btn.addEventListener('click', function(event) {
            event.preventDefault();

            const caixaPai = btn.closest('.caixaDocumentacao');
            const parametrosDiv = caixaPai.querySelector('.parametrosDiv');

            if (parametrosDiv) {
                parametrosDiv.classList.toggle('show');
            }
        });
    });

    document.addEventListener('click', function(event) {
        consultarBtns.forEach(btn => {
            const caixaPai = btn.closest('.caixaDocumentacao');
            const parametrosDiv = caixaPai.querySelector('.parametrosDiv');

            if (parametrosDiv && !parametrosDiv.contains(event.target) && !btn.contains(event.target)) {
                parametrosDiv.classList.remove('show');
            }
        });
    });
});

/* #### FILTRO DE CONCURSOS #### */
document.addEventListener("DOMContentLoaded", () => {
    const btnAbertos = document.getElementById('concursosAbertos');
    const btnTerminados = document.getElementById('concursosTerminados');
    const btnFuturos = document.getElementById('concursosFuturos');
    const cartoes = document.querySelectorAll('.cardConcurso');
    const mensagemVazia = document.getElementById('mensagemVazia');

    if (!btnAbertos || !btnTerminados || !btnFuturos) return;

    function filtrarConcursos(status) {
        let contador = 0;

        cartoes.forEach(cartao => {
            if (cartao.id === 'mensagemVazia') return;

            if (cartao.getAttribute('data-status') === status) {
                cartao.style.display = 'block';
                contador++;
            } else {
                cartao.style.display = 'none';
            }
        });
        if (mensagemVazia) {
            if (contador === 0) {
                mensagemVazia.style.display = 'block';
            } else {
                mensagemVazia.style.display = 'none';
            }
        }

        [btnAbertos, btnTerminados, btnFuturos].forEach(btn => btn.classList.remove('ativo'));

        if (status === 'abertos') btnAbertos.classList.add('ativo');
        if (status === 'terminados') btnTerminados.classList.add('ativo');
        if (status === 'futuros') btnFuturos.classList.add('ativo');
    }

    btnAbertos.addEventListener('click', () => filtrarConcursos('abertos'));
    btnTerminados.addEventListener('click', () => filtrarConcursos('terminados'));
    btnFuturos.addEventListener('click', () => filtrarConcursos('futuros'));

    filtrarConcursos('abertos');
});

/* #### MILITARES POSTOS CARDS #### */

document.addEventListener("DOMContentLoaded", () => {
    const options = document.querySelectorAll("#postosMilitares .option");
    const cardsGroups = document.querySelectorAll(".cardsPostos");

    const statusMap = {
        "Oficiais Generais": "oficiaisGenerais",
        "Oficiais Superiores": "oficiaisSuperiores",
        "Oficiais Subalternos": "oficiaisSubalternos",
        "Sargentos": "sargentos",
        "Praças": "pracas"
    };

    function updateCards(selectedText) {
        const targetStatus = statusMap[selectedText.trim()];
        
        cardsGroups.forEach(group => {
            if (group.getAttribute("data-status") === targetStatus) {
                group.style.display = "flex";
            } else {
                group.style.display = "none";
            }
        });
    }

    const initialSelected = document.querySelector("#postosMilitares .option.selected");
    if (initialSelected) {
        updateCards(initialSelected.innerText);
    }

    options.forEach(option => {
        option.addEventListener("click", (e) => {
            updateCards(e.target.innerText);
        });
    });
});

/* #### MILITARIZADOS POSTOS CARDS #### */

document.addEventListener("DOMContentLoaded", () => {
    const options = document.querySelectorAll("#postosMilitarizados .option");
    const cardsGroups = document.querySelectorAll(".cardsPostosMilitarizados");

    const statusMap = {
        "Oficiais Generais": "oficiaisGeneraisMilitarizados",
        "Oficiais Superiores": "oficiaisSuperioresMilitarizados",
        "Oficiais Subalternos": "oficiaisSubalternosMilitarizados",
        "Sargentos": "sargentosMilitarizados",
        "Praças": "pracasMilitarizados"
    };

    function updateCards(selectedText) {
        const targetStatus = statusMap[selectedText.trim()];
        
        cardsGroups.forEach(group => {
            if (group.getAttribute("data-status") === targetStatus) {
                group.style.display = "flex";
            } else {
                group.style.display = "none";
            }
        });
    }

    const initialSelected = document.querySelector(".option.selected");
    if (initialSelected) {
        updateCards(initialSelected.innerText);
    }

    options.forEach(option => {
        option.addEventListener("click", (e) => {
            updateCards(e.target.innerText);
        });
    });
});

/* #### INSTRUÇÕES BÁSICAS CARDS #### */

document.addEventListener("DOMContentLoaded", () => {
    const allOptions = Array.from(document.querySelectorAll("#instrucoesSection .option"));
    const allGroups = Array.from(document.querySelectorAll("#instrucoesSection .instrucoesBottom"));
    const basicOptions = allOptions.filter(el => !el.closest("#instrucoesComplementares"));
    const basicGroups = allGroups.filter(el => !el.closest("#instrucoesComplementares"));

    const statusMap = {
        "Praças": "basicaPraca",
        "Oficiais (TSN, TN & TS)": "basicaTSNTNTS",
        "Oficiais (Fuzileiros)": "basicaFuzileirosOficiais"
    };

    function updateInstrucoes(selectedText) {
        const targetStatus = statusMap[selectedText.trim()];
        
        if (!targetStatus) return;
        
        basicGroups.forEach(group => {
            if (group.getAttribute("data-status") === targetStatus) {
                group.classList.add("active"); 
            } else {
                group.classList.remove("active"); 
            }
        });
    }

    const initialSelected = basicOptions.find(opt => opt.classList.contains("selected"));
    if (initialSelected) {
        updateInstrucoes(initialSelected.innerText);
    }
    basicOptions.forEach(option => {
        option.addEventListener("click", (e) => {
            updateInstrucoes(e.target.innerText);
        });
    });
});

/* #### INSTRUÇÕES COMPLEMENTARES CARDS #### */

document.addEventListener("DOMContentLoaded", () => {
    const options = document.querySelectorAll("#instrucoesComplementares .option");
    const instrucoesGroups = document.querySelectorAll("#instrucoesComplementares .instrucoesBottom");

    const statusMap = {
        "Praças (Fuzileiros)": "complementarPracasFuzileiros",
        "Praças (Mergulhadores)": "complementarPracasMergulhadores",
        "Praças (Músicos)": "complementarPracasMúsicos",
        "Praças (Outras Classes)": "complementarPracasOutras",
        "Oficiais (TSN, TN & TS)": "complementarTSNTNTS",
        "Oficiais (Fuzileiros)": "complementarOficiaisFuzileiros"
    };

    function updateInstrucoes(selectedText) {
        const targetStatus = statusMap[selectedText.trim()];
        
        if (!targetStatus) return;
        
        instrucoesGroups.forEach(group => {
            if (group.getAttribute("data-status") === targetStatus) {
                group.classList.add("active"); 
            } else {
                group.classList.remove("active"); 
            }
        });
    }

    const initialSelected = document.querySelector("#instrucoesComplementares .option.selected");
    if (initialSelected) {
        updateInstrucoes(initialSelected.innerText);
    }

    options.forEach(option => {
        option.addEventListener("click", (e) => {
            updateInstrucoes(e.target.innerText);
        });
    });
});

/* #### PROVAS FISICAS CARDS #### */

document.addEventListener("DOMContentLoaded", () => {

    const options = document.querySelectorAll("#provasFisicasSection .option");
    const provasGroups = document.querySelectorAll("#provasFisicasSection .provas-group");

    const statusMap = {
        "Candidatos a Oficiais (Médicos e TSN/TN/TS) / Sargentos (ET/MQ) / Praças (Serviço Naval e Músicos)": "provasOficias",
        "Candidatos a Oficiais / Praças (Classe de Fuzileiros)": "provasFuzileiros",
        "Provas de aptidão física específica para Fuzileiros": "provasEspecificaFuzileiros",
        "Candidatos a Praças (Classe de Mergulhadores)": "provasMergulhadores",
        "Aptidão Física Específica para Mergulhadores": "provasEspecificaMergulhadores",
        "Aptidão Física Técnica para Mergulhadores": "provasTecnicaMergulhadores"
    };

    function updateProvas(selectedText) {
        const targetStatus = statusMap[selectedText.trim()];
        
        if (!targetStatus) return;
        
        provasGroups.forEach(group => {
            if (group.getAttribute("data-status") === targetStatus) {
                group.classList.add("active"); 
            } else {
                group.classList.remove("active"); 
            }
        });
    }

    const initialSelected = document.querySelector("#provasFisicasSection .option.selected");
    if (initialSelected) {
        updateProvas(initialSelected.innerText);
    }

    options.forEach(option => {
        option.addEventListener("click", (e) => {
            updateProvas(e.target.innerText);
        });
    });
});

/* #### PESQUISA CARREIRA #### */
document.addEventListener("DOMContentLoaded", () => {
    
    const searchBtns = document.querySelectorAll('.searchDropdownBtn');
    if (searchBtns.length > 0) {
        searchBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const container = btn.closest('#pesquisaCarreiraLeftDropdown');
                const dropdowns = container.querySelectorAll('.custom-dropdown');
                if (dropdowns.length >= 2) {
                    const hab = dropdowns[0].querySelector('.option.selected').innerText.trim();
                    const idade = dropdowns[1].querySelector('.option.selected').innerText.trim();
                    window.location.href = `carreiraPesquisa.html?hab=${encodeURIComponent(hab)}&idade=${encodeURIComponent(idade)}`;
                }
            });
        });
    }

    const cartoes = document.querySelectorAll('.cardPesquisaCarreira');
    if (cartoes.length > 0) {
        
        const urlParams = new URLSearchParams(window.location.search);
        const userHab = urlParams.get('hab');
        const userIdadeParams = urlParams.get('idade');

        if (userHab && userIdadeParams) {
            const page2Dropdowns = document.querySelectorAll('#pesquisaCarreiraLeftDropdown .custom-dropdown');
            if (page2Dropdowns.length >= 2) {
                atualizarDropdownVisuais(page2Dropdowns[0], userHab);
                atualizarDropdownVisuais(page2Dropdowns[1], userIdadeParams);
            }
        }

        function atualizarFiltrosTotais() {
            const tabAtiva = document.querySelector('#pesquisaCarreiraRightTop p.ativo');
            const categoriaAtiva = tabAtiva ? tabAtiva.innerText.trim().toLowerCase() : 'militares';

            const page2Dropdowns = document.querySelectorAll('#pesquisaCarreiraLeftDropdown .custom-dropdown');
            let atualHab = userHab || "Ensino Básico"; 
            let atualIdadeParams = userIdadeParams || "18"; 

            if (page2Dropdowns.length >= 2) {
                atualHab = page2Dropdowns[0].querySelector('.option.selected').innerText.trim();
                atualIdadeParams = page2Dropdowns[1].querySelector('.option.selected').innerText.trim();
            }

            const atualIdade = atualIdadeParams === '+27' ? 99 : parseInt(atualIdadeParams);

            // C. Filtrar cada cartão
            cartoes.forEach(cartao => {
                const regrasHab = cartao.getAttribute('data-hab') || "";
                const regraIdadeMax = parseInt(cartao.getAttribute('data-idade-max')) || 0;
                const categoriaCartao = cartao.getAttribute('data-categoria') ? cartao.getAttribute('data-categoria').toLowerCase() : '';

                const passaCategoria = (categoriaCartao === categoriaAtiva);
                const passaHab = regrasHab.includes(atualHab);
                const passaIdade = (atualIdade <= regraIdadeMax);

                if (passaCategoria && passaHab && passaIdade) {
                    cartao.style.display = 'flex';
                } else {
                    cartao.style.display = 'none';
                }
            });
        }

        const tabsCategoria = document.querySelectorAll('#pesquisaCarreiraRightTop p');
        tabsCategoria.forEach(tab => {
            tab.addEventListener('click', () => {
                tabsCategoria.forEach(t => t.classList.remove('ativo'));
                tab.classList.add('ativo');
                atualizarFiltrosTotais();
            });
        });

        if (!document.querySelector('#pesquisaCarreiraRightTop p.ativo') && tabsCategoria.length > 0) {
            tabsCategoria[0].classList.add('ativo');
        }
        atualizarFiltrosTotais();
    }
});

function atualizarDropdownVisuais(dropdownContainer, valorParaSelecionar) {
    const btn = dropdownContainer.querySelector('.dropdown-btn');
    const options = dropdownContainer.querySelectorAll('.option');
    options.forEach(opt => {
        opt.classList.remove('selected');
        if (opt.innerText.trim() === valorParaSelecionar) {
            opt.classList.add('selected');
            btn.innerHTML = `${valorParaSelecionar} 
            <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L4 4L7 1" stroke="#182439" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`;
        }
    });
}

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
    btnEnviar.addEventListener('click', function() {
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
    emailInput.addEventListener('input', function() {
        this.style.borderColor = '';
    });
}
function toggleAccordion(header) {
    const item = header.closest('.accordion-item');
    item.classList.toggle('open');
}
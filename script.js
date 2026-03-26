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

function updateNavVisibility() {
    if (scrollSnapArticle.scrollTop >= window.innerHeight) {
        nav.style.display = 'flex';
        sideButtons.style.display = 'flex';
    } else {
        nav.style.display = 'none';
        sideButtons.style.display = 'none';
    }
}

scrollSnapArticle.addEventListener('scroll', updateNavVisibility);
updateNavVisibility();
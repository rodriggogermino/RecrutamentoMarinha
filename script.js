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
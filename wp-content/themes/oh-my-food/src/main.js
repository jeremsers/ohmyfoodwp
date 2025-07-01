const infoTab = document.querySelector('.info-tab');
const menuTab = document.querySelector('.menu-tab');
const infoTabContainer = document.querySelector('.info-tab-container');
const menuTabContainer = document.querySelector('.menu-tab-container');

infoTab.addEventListener('click', () => {
    infoTab.classList.add('active');
    infoTab.classList.remove('inactive');
    menuTab.classList.add('inactive');
    menuTab.classList.remove('active');
    infoTabContainer.classList.add('active-tab');
    menuTabContainer.classList.add('inactive-tab');
    infoTabContainer.classList.remove('inactive-tab');
    menuTabContainer.classList.remove('active-tab');
});

menuTab.addEventListener('click', () => {
    menuTab.classList.add('active');
    menuTab.classList.remove('inactive');
    infoTab.classList.add('inactive');
    infoTab.classList.remove('active');
    menuTabContainer.classList.add('active-tab');
    infoTabContainer.classList.add('inactive-tab');
    menuTabContainer.classList.remove('inactive-tab');
    infoTabContainer.classList.remove('active-tab');
});
////// TABS INDEX ///////

var tabs = document.querySelectorAll('.tabs li');
var wrap = document.querySelectorAll('.wrapper-list');

var active = 0;

for (let i = 0; i < tabs.length; i++) {

    tabs[i].addEventListener('click', function () {

        tabs[active].classList.remove('active');

        wrap[active].classList.remove('active');


        tabs[i].classList.add('active');

        wrap[i].classList.add('active');


        active = i;
    });
}


var burger = document.querySelector('div.nav_burger');
var menu = document.querySelector('div.burger');
var cross = document.querySelector('li.cross');

menu.addEventListener('click', function() {
  console.log('chien');
  burger.classList.toggle('active');
})
cross.addEventListener('click', function() {
  burger.classList.add('active');
})
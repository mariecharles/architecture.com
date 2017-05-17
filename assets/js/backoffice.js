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


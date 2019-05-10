document.body.addEventListener('load', function() {
  var darkModeBtn = document.querySelector('#dark-mode');
  console.log("loaded");

  darkModeBtn.addEventListener('click', function() {
    var nav = document.querySelector('nav');
    var main = document.querySelector('main');
    var chatbox = document.querySelector('input[name="chatbox"]');
    console.log('loaded');
    if (nav.style.background == '') {
      console.log('clicked');
      nav.style.background = '#111';
      nav.style.color = '#ddd';
      nav.style.borderRight = '1px solid #555';

      main.style.background = '#000';
      main.style.color = '#ddd';
    } else if (nav.style.background === '#222') {

    } else {
      nav.style.background = '#111';
      nav.style.color = '#ddd';
      nav.style.borderRight = '1px solid #555';

      main.style.background = '#000';
      main.style.color = '#ddd';
    }
  });
});

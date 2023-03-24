let figma = document.getElementById('figma');
let html = document.getElementById('html');
let css = document.getElementById('css');
let bs = document.getElementById('bs');
let js = document.getElementById('js');

figma.animate([
    // étapes/keyframes
    { transform: 'skewX(0deg);' },
    { transform: 'skewX(180deg);' }
  ], {
    // temporisation
    duration: 1000,
    iterations: Infinity
  });
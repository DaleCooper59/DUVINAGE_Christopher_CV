const menu = document.querySelector('.menu');
const item = document.getElementsByTagName('li');



function lighthOn(ul) {

  for (var i = 0; i < item.length; i++) {
    let it = item[i].className;
    if (it != null && it == "id_li1") {
      let child = item[i].childNodes[1];
      child.style.color = '#22a6b3';
      child.style.opacity = '1';
      child.style.display = 'inline';
    }

  }
}

lighthOn(menu)


/*anime.js***********************************************************************/

var lineDrawing = anime({
  targets: '#lineDrawing .lines path',
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: 'easeInOutSine',
  duration: 1000,
  delay: function (el, i) {
    return i * 250
  },
  direction: 'alternate',
  loop: false
});







/*Slider************************************************************************/
 
const slides = document.getElementsByClassName('slides');
const nav_manual = document.getElementById('nav_manual');

nav_manual.addEventListener('click',()=>{
  slides[0].classList.remove("animateSlides");
  setTimeout(() => {
    slides[0].classList.add("animateSlides")
  }, 3000);
  
})


/*copyrigth***************************************************************************/

let date = new Date()
let copy = document.querySelector('.copyR');
copy.innerHTML = date.getFullYear() + " &copy; DaleCooper59 Tous droits réservés";
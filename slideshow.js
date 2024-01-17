document.addEventListener("DOMContentLoaded", function () {

      // Extrahiere den Pfad aus der aktuellen URL
      var currentPath = window.location.pathname;

      // Entferne führende und abschließende /
      currentPath = currentPath.replace(/^\/|\/$/g, '');
  
      // Entferne .php
      currentPath = currentPath.replace('.php', '');
  
      // Wenn der Pfad jetzt leer ist, setze ihn auf "index"
      if (currentPath === '') {
          currentPath = 'index';
      }

      currentPath = './img/Galerie/' + currentPath;


  fetch('fetchImages.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'variable=' + currentPath,
  })
      .then(response => response.json())
      .then(data => {
          Object.keys(data).forEach((key, index) => {
              const h3 =document.createElement('h3');
              const div = document.createElement('div');
              div.className = "slideShow";
              div.id = index;
              h3.textContent = Object.keys(data)[index]
              div.appendChild(h3);
              console.log(data);

              console.log(Object.keys(data)[index]);
              data[key].forEach((image, index) => {
                  const img = document.createElement('img');
                  img.src = image;
                  img.className = "slideDiv slide";
                  img.alt = "Auto Generated Slideshow";
                  if( index == 0) {
                      img.classList.add("visible");
                  }
                  div.appendChild(img);
              });


              const prevButton = document.createElement('a');
              prevButton.className = 'prev';
              prevButton.textContent = '<===';

              const nextButton = document.createElement('a');
              nextButton.className = 'next';
              nextButton.textContent = '===>';

              div.appendChild(prevButton);
              div.appendChild(nextButton);

              prevButton.addEventListener('click', () => changeSlide(-1, index));
              nextButton.addEventListener('click', () => changeSlide(+1, index));

              
              document.getElementById('main').appendChild(div);


          });
      });
});

var slideShows = document.getElementsByClassName("slideShow");

function changeSlide(n, i) {
  var currentSlideHere = slideShows[i].getElementsByClassName("visible");

  // Überprüfen, ob ein sichtbares Element gefunden wurde
  if (currentSlideHere.length > 0) {
      var slides = slideShows[i].getElementsByClassName("slide");
      var slidesArray = Array.prototype.slice.call(slides);
      var here = slidesArray.indexOf(currentSlideHere[0]);

      // Entfernen der Klasse "visible" vom aktuellen Slide
      slides[here].classList.remove("visible");

      here += n;

      // Überprüfen, ob die neue Position innerhalb der Grenzen liegt
      if (here >= slides.length) {
          here = 0;
      } else if (here < 0) {
          here = slides.length - 1;
      }

      // Hinzufügen der Klasse "visible" zum neuen Slide
      slides[here].classList.add("visible");
  }
}
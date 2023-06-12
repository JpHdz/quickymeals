'use strict';

const btnStartExploring = document.querySelector('.btn-main-explorar');
const iconStartExploring = document.querySelector('.icon-main-container');
const mainContent = document.querySelector('.content-container');

const btnsMoreInfoSide = document.querySelectorAll('.card-more-info');
const elsIndoSide = document.querySelectorAll('.more-info-side');
const iconsTreeDots = document.querySelectorAll('.fa-ellipsis-vertical');
// const btnNextRecipesScroll = document.querySelector('.btn-next-recipes');
// const btnPreviousRecipesScroll = document.querySelector(
// '.btn-previous-recipes'
// );
// const elPopularContainer = document.querySelector('.popular-recipes-container');
const recipesContainers = document.querySelectorAll('.recipes-container');
const btnsNextRecipes = document.querySelectorAll('.btn-next-recipes');
const btnsPreviousRecipes = document.querySelectorAll('.btn-previous-recipes');

const carouselItem = document.querySelectorAll('.carousel-item');

// =================================================== //
// Hero main section //
// =================================================== //

const scrollToContent = (e) => {
  console.log('a');
  mainContent.scrollIntoView({ behavior: 'smooth' });
};

btnStartExploring.addEventListener('click', scrollToContent);
iconStartExploring.addEventListener('click', scrollToContent);
// =================================================== //
// Scroll recipes carousel //
// =================================================== //

//
// Estatica
//

// let isHovering = false;

// const nextRecipes = () => {
//   elPopularContainer.scrollLeft += elPopularContainer.offsetWidth;
// };

// const previousRecipes = () => {
//   elPopularContainer.scrollLeft -= elPopularContainer.offsetWidth;
// };

// btnNextRecipesScroll.addEventListener('click', nextRecipes);
// btnPreviousRecipesScroll.addEventListener('click', previousRecipes);

// elPopularContainer.addEventListener('mouseover', (e) => {
//   isHovering = true;
// });
// elPopularContainer.addEventListener('mouseleave', () => {
//   isHovering = false;
// });

// document.addEventListener('keydown', (e) => {
//   if (e.keyCode == 39 && isHovering) {
//     nextRecipes();
//   } else if (e.keyCode == 37 && isHovering) {
//     previousRecipes();
//   }
// });

//
//Dinamica
//

let hoveringData = null;
const nextRecipes = (container) => {
  container.scrollLeft += container.offsetWidth;
};

const previousRecipes = (container) => {
  container.scrollLeft -= container.offsetWidth;
};

btnsNextRecipes.forEach((btn) => {
  btn.addEventListener('click', () => {
    const dataSection = btn.getAttribute('data-section');
    recipesContainers.forEach((container) => {
      if (container.getAttribute('data-section') == dataSection) {
        nextRecipes(container);
      }
    });
  });
});

btnsPreviousRecipes.forEach((btn) => {
  btn.addEventListener('click', () => {
    const dataSection = btn.getAttribute('data-section');
    recipesContainers.forEach((container) => {
      if (container.getAttribute('data-section') == dataSection) {
        previousRecipes(container);
      }
    });
  });
});

recipesContainers.forEach((container) => {
  container.addEventListener('mouseover', (e) => {
    hoveringData = container;
  });
  container.addEventListener('mouseleave', () => {
    hoveringData = null;
  });
});

document.addEventListener('keydown', (e) => {
  if (e.keyCode == 39 && hoveringData != null) {
    nextRecipes(hoveringData);
  } else if (e.keyCode == 37) {
    previousRecipes(hoveringData);
  }
});

// =================================================== //
// JS guardar video, reportar, agregar a coleccion //
// =================================================== //
const arraybtnsMoreInfoSide = Array.from(btnsMoreInfoSide);
const arrayiconsTreeDos = Array.from(iconsTreeDots);

btnsMoreInfoSide.forEach((btn) => {
  btn.addEventListener('click', () => {
    console.log(btn);
    const dataValue = btn.getAttribute('data-cardValue');

    elsIndoSide.forEach((el) => {
      if (el.getAttribute('data-cardvalue') == dataValue)
        el.classList.toggle('hidden');
    });
  });
});

document.addEventListener('click', (e) => {
  if (
    arraybtnsMoreInfoSide.includes(e.target) ||
    arrayiconsTreeDos.includes(e.target)
  )
    return;
  // if (e.target == btnsMoreInfoSide[0] || e.target == iconsTreeDots[0]) return;
  elsIndoSide.forEach((el) => {
    el.classList.add('hidden');
  });
});

// =================================================== //
// JS Carousel Promo //
// =================================================== //

carouselItem[0].classList.add('active');

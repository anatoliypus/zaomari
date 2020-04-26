function run() {
  let imgNext = document.createElement('img');
  imgNext.src = "img/angle-right.png";
  imgNext.style.width = '17px';
  imgNext.style.height = '25px';

  let imgPrev = document.createElement('img');
  imgPrev.src = "img/angle-left.png";
  imgPrev.style.height = '25px';
  imgPrev.style.width = '17px';

  $('#header').slick({
    autoplay: true, 
    autoplaySpeed: 4000,
    speed: 700
  });

  document.querySelector('.slick-next').append(imgNext);
  document.querySelector('.slick-prev').append(imgPrev);
}

window.onload = function() {
  setTimeout(run, 100);
};
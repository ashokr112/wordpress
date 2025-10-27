
document.addEventListener('DOMContentLoaded', function(){
  // Slider
  const slides = document.querySelectorAll('.slide');
  const dotsWrap = document.createElement('div');
  dotsWrap.className = 'dots';
  document.querySelector('.site-hero').appendChild(dotsWrap);
  let index = 0;
  const total = slides.length;
  let timer = null;

  for(let i=0;i<total;i++){
    const dot = document.createElement('div');
    dot.className = 'dot' + (i===0? ' active':'');
    dot.dataset.index = i;
    dot.addEventListener('click', e=>{ index = parseInt(e.currentTarget.dataset.index); show(index); resetTimer(); });
    dotsWrap.appendChild(dot);
  }
  const dots = dotsWrap.querySelectorAll('.dot');

  function show(i){
    slides.forEach(s=>s.classList.remove('active'));
    dots.forEach(d=>d.classList.remove('active'));
    slides[i].classList.add('active');
    dots[i].classList.add('active');
  }
  function next(){ index = (index+1)%total; show(index); }
  function resetTimer(){ clearInterval(timer); timer = setInterval(next,5000); }
  timer = setInterval(next,5000);
  show(0);
});

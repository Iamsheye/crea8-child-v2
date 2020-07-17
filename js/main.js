const head = gsap.timeline();
head.from(".title", {
  duration: 1,
  y: "-10vw",
  ease: "slow"
});
head.from(".det", {
  duration: 2,
  x: "-60vw",
  ease: "slow"
});

gsap.from(".stroll", {
  duration: 1,
  opacity: 0,
  scale: 0.25
});

const tl = gsap.timeline({ repeat: -1, delay: 1.125 });
tl.to(".stroll", {
  duration: 3,
  x: "38vw",
  ease: "slow",
});
tl.to(".stroll", {
  duration: 1,
  rotateY: 180
});
tl.to(".stroll", {
  duration: 3,
  x: "0%",
  ease: "slow"
});
tl.to(".stroll", {
  duration: 1,
  rotateY: 0
});

const pl = gsap.timeline({ repeat: -1 });
pl.to(".ppl", {
  duration: 1.5,
  rotation: -10,
  ease: "slow"
});
pl.to(".ppl", {
  duration: 1.5,
  rotation: 0,
  ease: "slow"
});
pl.to(".ppl", {
  duration: 1.5,
  rotation: 10,
  ease: "slow"
});
pl.to(".ppl", {
  duration: 1.5,
  rotation: 0,
  ease: "slow"
});

const topbaby = document.querySelector('.topbaby');
const baby1 = document.querySelector('.baby-1');
const baby2 = document.querySelector('.baby-2');
const baby3 = document.querySelector('.baby-3');
const baby4 = document.querySelector('.baby-4');
const baby5 = document.querySelector('.baby-5');
const baby6 = document.querySelector('.baby-6');

baby1.addEventListener('click', () => {
  topbaby.src = "png/baby-1.png";
  baby1.classList.add('border');
  baby2.classList.remove('border');
  baby3.classList.remove('border');
  baby4.classList.remove('border');
  baby5.classList.remove('border');
  baby6.classList.remove('border');
})

baby2.addEventListener('click', () => {
  topbaby.src = "png/baby-2.png";
  baby2.classList.add('border');
  baby1.classList.remove('border');
  baby3.classList.remove('border');
  baby4.classList.remove('border');
  baby5.classList.remove('border');
  baby6.classList.remove('border');
})

baby3.addEventListener('click', () => {
  topbaby.src = "png/baby-3.png";
  baby3.classList.add('border');
  baby2.classList.remove('border');
  baby1.classList.remove('border');
  baby4.classList.remove('border');
  baby5.classList.remove('border');
  baby6.classList.remove('border');
})

baby4.addEventListener('click', () => {
  topbaby.src = "png/baby-4.png";
  baby4.classList.add('border');
  baby2.classList.remove('border');
  baby3.classList.remove('border');
  baby1.classList.remove('border');
  baby5.classList.remove('border');
  baby6.classList.remove('border');
})

baby5.addEventListener('click', () => {
  topbaby.src = "png/baby-5.png";
  baby5.classList.add('border');
  baby2.classList.remove('border');
  baby3.classList.remove('border');
  baby4.classList.remove('border');
  baby1.classList.remove('border');
  baby6.classList.remove('border');
})

baby6.addEventListener('click', () => {
  topbaby.src = "png/baby-6.png";
  baby6.classList.add('border');
  baby2.classList.remove('border');
  baby3.classList.remove('border');
  baby4.classList.remove('border');
  baby5.classList.remove('border');
  baby1.classList.remove('border');
})
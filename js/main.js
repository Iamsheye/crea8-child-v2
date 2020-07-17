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
  x: "48vw",
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
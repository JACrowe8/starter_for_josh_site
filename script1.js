//gsap.from('.navbar-brand', {opacity:0, duration:2, y:-50, ease:"bounce.out"});
//gsap.from('.tag', {opacity:0, duration:2, x:-50, delay:1.4});

gsap.registerPlugin(ScrollTrigger);

gsap.timeline()
.from('.navbar', {scale:0, duration:2})
.from('.navbar-brand', {opacity:0, scale: 0, ease:"back"})
.from('.tag', {opacity:0, y: 10, ease:"back"});

const tl = gsap.timeline({
    scrollTrigger: {
     trigger: '.aboutbg',
     markers:true,
     start:"bottom 90%", 
     end:"top 30%",
     scrub:3, 
          }
  
});

tl.from('.about-text',{
 duration:1,
      y:250,
 opacity:0,
}).from('.blocker',{
 duration:1,
 x:250,
opacity:0,
});


    

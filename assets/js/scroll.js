(function () {
	'use strict';

	const root=document.documentElement;
	const body=document.body;

	root.classList.add('scroll-reveal');

	if(window.matchMedia&&window.matchMedia('(prefers-reduced-motion: reduce)').matches){
		body.classList.remove('scroll-up','scroll-down');
		return;
	}

	let lastY=window.scrollY||0;
	let ticking=false;
	const threshold=40;

	function update(){
		const y=window.scrollY||root.scrollTop||0;

		if(y>threshold){
			if(y>lastY){
				body.classList.add('scroll-down');
				body.classList.remove('scroll-up');
			}else if(y<lastY){
				body.classList.add('scroll-up');
				body.classList.remove('scroll-down');
			}
		}else{
			body.classList.remove('scroll-up','scroll-down');
		}

		lastY=y;
		ticking=false;
	}

	function onScroll(){
		if(ticking) return;
		ticking=true;
		window.requestAnimationFrame(update);
	}

	update();
	window.addEventListener('scroll',onScroll,{passive:true});
})();

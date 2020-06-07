{
	// Effect 6
	class HoverImgFx6 {
		constructor(el) {
			this.DOM = {el: el};
			charming(this.DOM.el);
			this.DOM.letters = Array.from(this.DOM.el.querySelectorAll('span'));
			this.initEvents();
		}
		initEvents() {
			this.mouseenterFn = (ev) => {
				this.animateLetters();
			};
			this.DOM.el.addEventListener('mouseenter', this.mouseenterFn);
			window.addEventListener('resize', () => this.rect = this.DOM.reveal.getBoundingClientRect());
		}
		animateLetters() {
			TweenMax.set(this.DOM.letters, {opacity: 0});
			TweenMax.staggerTo(this.DOM.letters, 1.5, {
				ease: Elastic.easeOut.config(1,0.4),
				startAt: {y: '50%'},
				y: '0%',
				opacity: 1
			}, 0.02);
		}
	}

	Array.from(document.querySelectorAll('.site-navigation .menu-item')).forEach(link => new HoverImgFx6(link));
}

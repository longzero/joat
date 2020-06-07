// ---------------------------------------------
// NAVIGATION TOGGLE
// ---------------------------------------------
let navigation = document.querySelector('.js-navigation')
if (navigation) {
	navigation.addEventListener('click', function() {
		document.body.classList.toggle('navigation-open')
	})
}



// ---------------------------------------------
// NUMBER SCROLL
// ---------------------------------------------
var lastScrollTop = 0;
var numberScroll = []
// var scrollPosition = $(window).scrollTop();
for (var i = 0; i < $('.js-blind-container').length; i++) {
	numberScroll.push(0)
}
$(window).scroll(function(){
	getScrollDirection()
  isVisibleBlind(.95, '.js-blind-container')
})

var scrollDown = true
function getScrollDirection() {
	var st = $(this).scrollTop();
	if (st > lastScrollTop){
		// downscroll code
		scrollDown = true
	} else {
		// upscroll code
		scrollDown = false
	}
	lastScrollTop = st;
}

function isVisibleBlind(visibilityFactor, elements) {
	var count = 0
	var isVisible = false
	var windowHeight = $(window).height()
	var gridTop = windowHeight * visibilityFactor // coefficient between 0 and 1 // 0 means when the top of the element reaches the top and 1 means when the top of the element reaches the bottom.
	var gridBottom = 0
	$(elements).each(function() {
		var thisTop = $(this).offset().top - $(window).scrollTop();

		// console.log(count + ": " + numberScroll[count])
		if (thisTop < gridTop && (thisTop + $(this).height()) > gridBottom - numberScroll[count] && scrollDown) {
		// if (thisTop < gridTop) {
			console.log(scrollDown)
			console.log($(this))
			$(this).addClass('active')
			numberScroll[count]++
			$(this).css("transition","0") // Because animations seems to jump
			$(this).css("transform","translateY(-" + numberScroll[count] + "px)")
			isVisible = true
		}
		else {
			$(this).removeClass('active')
			numberScroll[count] = 0
			$(this).css("transition",".3s") // To make animation fluid
			$(this).css("transform","translateY(-" + numberScroll[count] + "px)")
			isVisible = false
		}
		count++
	});
	// count = 0 // reset after loop
	return isVisible
}



// ---------------------------------------------
// SECTION NAME
// Use onload to make sure images are loaded so the correct sizes and positions are calculated.
// ---------------------------------------------
function scrollSectionName() {
	let currentScroll = $(this).scrollTop()
	let previousScroll = 0;
	let sectionNameOffsetTop = [] // The top offset of each section name.
	let sectionNameWidth = [] // The width of each section name.

	// Position section names
	if ($(window).width() >= 1024) {
		$('.js-section-name-absolute').each(function(){
			let thisElement = $(this)
			let sectionNameTop = thisElement.offset().top
			let sectionNameLeft = thisElement.offset().left

			sectionNameOffsetTop.push(sectionNameTop) // Put it in an array to use again when scrolling
			sectionNameWidth.push(thisElement.find('.js-section-name').width()) // Put it in an array to use again when scrolling

			// Position absolute every section name on the page.
			thisElement.css({
				'position': 'absolute',
				'top': sectionNameTop,
				'left': sectionNameLeft,
				'width': thisElement.width()
			})
		}) // each
	}

}



// ---------------------------------------------
// VISIBLE IS ON SCREEN
// https://stackoverflow.com/a/29892541/2716287
// ---------------------------------------------
$(function(){
	isVisible(.95, '.fade-right, .fade-scale, .fade-up')
	mainboxScroll()
})

function mainboxScroll() {
	var scrollCount = 0
	$(window).on('scroll', function() {
		scrollCount++

		if (scrollCount > 1) {
			isVisible(.9, '.fade-right, .fade-scale, .fade-up')
		}

	});
	$(window).trigger('scroll');
}

function isVisible(visibilityFactor, elements) {
	var isVisible = false
	var windowHeight = $(window).height()
	var gridTop = windowHeight * visibilityFactor // coefficient between 0 and 1 // 0 means when the top of the element reaches the top and 1 means when the top of the element reaches the bottom.
	$(elements).each(function() {
		var thisTop = $(this).offset().top - $(window).scrollTop();

		// if (thisTop > gridTop && (thisTop + $(this).height()) < gridBottom) {
		if (thisTop < gridTop) {
			$(this).addClass('active')
			isVisible = true
		} else {
			// $(this).removeClass('active')
			isVisible = false
		}
	});
	return isVisible
}



// ---------------------------------------------
// YOUTUBE VIDEO
// ---------------------------------------------
function getVideoId(url) {
	var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
	var match = url.match(regExp);

	if (match && match[2].length == 11) {
		return match[2];
	} else {
		return 'error';
	}
}

function insertYoutube(url) {
	var youtubeIframe = '<iframe class="youtube-iframe" width="100%" src="//www.youtube.com/embed/'
		+ getVideoId(url) + '" frameborder="0" allowfullscreen></iframe>';
	document.querySelector('[data-youtube]').innerHTML = youtubeIframe
}



// ---------------------------------------------
// ONLOAD
// ---------------------------------------------
window.onload = function() {
	let youtube = document.querySelector('[data-youtube]')
	if (youtube) {
		insertYoutube(youtube.getAttribute("data-youtube"))
	}

	// Scroll title from section to section
	scrollSectionName()
}


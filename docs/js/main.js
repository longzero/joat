"use strict";


let isScrolling = false;

function getScrollPercent() {
	var w=window
	var d=document
	var e=d.documentElement
	var g=d.getElementsByTagName('body')[0]
	var x=w.innerWidth||e.clientWidth||g.clientWidth
	var y=w.innerHeight||e.clientHeight||g.clientHeight

	var docHeight = document.body.clientHeight - y // Use this line for the HTML page
	var scrollPosition = getBodyScrollTop()
	var scrollPercent = Math.round(100 * scrollPosition/docHeight);

  docHeight = document.body.clientHeight - y
  scrollPosition = getBodyScrollTop()
  return scrollPercent = Math.round(100 * scrollPosition/docHeight)
}

function getBodyScrollTop() { return document.scrollingElement.scrollTop || document.documentElement.scrollTop}


window.addEventListener('scroll', function(){
	document.querySelector('body').classList.add('scrolling') // Indicate that user is scrolling
	window.clearTimeout(isScrolling); // Prevent body class (scrolling) from being removed as long as user scrolls.
	isScrolling = setTimeout(function(){
		document.querySelector('body').classList.remove('scrolling'); // When user stops scrolling, remove the body class.
	}, 400);

	// console.log(getScrollPercent())
	if (getScrollPercent() <= 1) {
		document.querySelector('body').classList.remove('scrolled')
	}
	else {
		document.querySelector('body').classList.add('scrolled')
	}
});


// --------------------------------------------------------------------------------------------
// NAVIGATION
// --------------------------------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function() {
	document.querySelector('.js-burger').addEventListener('click', function(){
		document.querySelector('body').classList.toggle('navigation-lata')
	})
});



// --------------------------------------------------------------------------------------------
// FOR DEVELOPMENT ONLY
// --------------------------------------------------------------------------------------------
if (window.location.href.indexOf('.local') > -1) {
  console.log("readyState: " + document.readyState)
  console.log('Website is running locally')

  document.addEventListener('error', function (event) {
    if (event.target.tagName.toLowerCase() !== 'img') return;
    event.target.src = 'https://townsquare.media/site/442/files/2019/11/baby-yoda-11.jpg?w=400&q=75';
  }, true);
}

console.log("main.js loaded")

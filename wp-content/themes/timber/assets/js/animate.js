'use strict'
document.addEventListener('DOMContentLoaded', function() {
  var aItems = Array.prototype.slice.call(document.querySelectorAll('.animate__animated'))
  if (aItems.length > 0) {
    document.addEventListener('scroll', animateOnScroll);
  }
  function animateOnScroll() {
    for (let i = 0; i < aItems.length; i++) {
      var aItem = aItems[i] //get anim elem
      var aItemHeight = aItem.offsetHeight //height of anim elem
      var aItemOffset = offset(aItem).top //coords of anim elem from top
      var aItemPoint = window.innerHeight - aItemHeight / 4 //where appear anim elem
      if (aItemHeight > window.innerHeight) { //if elem bigger than screen
        aItemPoint = window.innerHeight - window.innerHeight / 4
      }
      // if scroll to element start
      if ((window.pageYOffset > aItemOffset - aItemPoint)) {
        if (aItem.classList.contains('header__sale'))
          aItem.classList.add('animate__pulse')
        else if (aItem.tagName.toLowerCase() === 'div')
          aItem.classList.add('animate__fadeInRight')
        else
          aItem.classList.add('animate__fadeInUp')
      } else {
        if (aItem.classList.contains('header__sale'))
          aItem.classList.remove('animate__pulse')
        else if (aItem.tagName.toLowerCase() === 'div')
          aItem.classList.remove('animate__fadeInRight')
        else
          aItem.classList.remove('animate__fadeInUp')
      }
    }
  }
  function offset(item) {
    var rect = item.getBoundingClientRect()
    var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop
    return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
  }
  setTimeout(animateOnScroll(), 500)
})
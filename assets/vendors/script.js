function openMenu() {
  document.querySelector('.header__menu').classList.toggle('show')
}

function openDropDown() {
  document.querySelector('.dropdown', '.search').classList.toggle('show')
}

// function openCity(evt, cityName) {
//   var i, tabcontent, tablinks;
//   tabcontent = document.getElementsByClassName("tags__content");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tab--small");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }
//   document.getElementById(cityName).style.display = "flex";
//   evt.currentTarget.className += " active";
// }



var n = $('.single__images img').length;
$('#number').html(n-4);


$('.single__images img').each(function(e){
  $(this).clone().appendTo(`.slider`)
  $('.slider img:first-child').addClass('active')
})

$('.single__images > *').on('click', function() {
  $('.modal').addClass('show')
})

$('.btn-close').on('click', function() {
  $('.modal').removeClass('show')
})

$('.btn-next').on('click', function() {
  var next = $('.slider img.active').next()
  next.addClass('active')
  next.prev().removeClass('active')
})

$('.btn-prev').on('click', function() {
  var prev = $('.slider img.active').prev()
  prev.addClass('active')
  prev.next().removeClass('active')
})
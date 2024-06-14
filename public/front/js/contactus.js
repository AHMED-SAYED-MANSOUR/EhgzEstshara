// Sticky Navbar
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.sticky-top').addClass('shadow-sm').css('top', '0px');
    } else {
        $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
    }
//     var section = document.querySelector("section"),
//     overlay = document.querySelector(".overlay"),
//     showBtn = document.querySelector(".show-modal"),
//     closeBtn = document.querySelector(".close-btn");

//   showBtn.addEventListener("click", () => section.classList.add("active"));

//   overlay.addEventListener("click", () =>
//     section.classList.remove("active")
//   );

//   closeBtn.addEventListener("click", () =>
//     section.classList.remove("active")
//   );
  $(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',
	});
});
  // Button with class boxed-btn3
  $('.boxed-btn3').on('click', function(event) {
    event.preventDefault();



    // Close the popup
    $.magnificPopup.close();
});
$('#test-form').on('submit', function(event) {
    event.preventDefault();

    // Handle form submission logic here (e.g., AJAX request)
    alert('Form submitted!');

    // Close the popup
    $.magnificPopup.close();
});


$('#test-form').on('submit', function(event) {
    event.preventDefault();

    alert('Form submitted!');

    // Close the popup
    $.magnificPopup.close();
});


});(jQuery);

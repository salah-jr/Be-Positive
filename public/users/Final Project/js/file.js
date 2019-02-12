	// Get the modal
"USE STRICT";
var modal = document.getElementById('logIn');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target === modal) {
		modal.style.display = "none";
	}
};
// Get the modal
var modal2 = document.getElementById('registration');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target === modal2) {
		modal2.style.display = "none";
	}
};
$(document).ready( function() {
   $(document).on('change', '.btn-file :file', function(){
        var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

$('.btn-file :file').on('fileselect', function(event, label) {
    var input = $(this).parents('.input-group').find(':text'),
    log = label;
    if( input.length ) {
        input.val(log);
    } else {
    if( log ) alert(log);
    }
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#img-upload').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#input-img").change(function(){
    readURL(this);
    });
});
$(document).ready(function(){
        $(".next").click(function(){
        $('.step1').hide();
        $('.step2').show();
    });
        $(".back").click(function(){
        $('.step1').show();
        $('.step2').hide();
    });
});
    function openRightMenu() {
		document.getElementById("rightMenu").style.display = "block";
	}

	function closeRightMenu() {
		document.getElementById("rightMenu").style.display = "none";
	}
$(document).ready(function(){
	$(".logInForm").click(function(){
        $(".logIn").show();
    });
    $(".close").click(function(){
        $(".logIn").hide();
    });
    $(".registrationForm").click(function(){
        $(".registration").show();
        $(".close").click(function(){
            $(".registration").hide();
        });
    });
});
$("#portfolio-flters li").click(function () {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    var selectedFilter = $(this).data("filter");
    $("#portfolio-wrapper").fadeTo(100, 0);

    $(".portfolio-item").fadeOut().css('transform', 'scale(0)');

    setTimeout(function () {
      $(selectedFilter).fadeIn(100).css('transform', 'scale(1)');
      $("#portfolio-wrapper").fadeTo(300, 1);
    }, 300);
  });

  
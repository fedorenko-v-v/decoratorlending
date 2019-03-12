$(document).ready(function() {


// 	function sendS(dataContacts){
// 	$.ajax({
// 		url: '/php/sendmessage.php',
// 		type: 'POST',
// 		data: dataContacts,
// 		success: function(res) {
// 		if(res == 'SendToMail'){
// 			$('[name]').removeClass('error');
// 			$(':input','#formMessageAbout')
// 			.not(':button, :submit, :reset, :hidden')
// 			.val('')
// 			.removeAttr('checked')
// 			.removeAttr('selected');
// 			console.log(res);
// 			$('.glassMes').addClass('open');
// 		}
// 		else{
// 			var obj = jQuery.parseJSON(res);
// 			for (var key in obj) {
// 			if ( obj[key] == 'error'){
// 				$('[name='+key+']').addClass('error');
// 			}
// 			else{
// 				$('[name='+key+']').removeClass('error');
// 			}
// 			}
// 		}
// 		}
// 	});
// }
//
// $('#sendMessage').on('click', function(event){
// 	event.preventDefault();
// 	var dataContacts = $('#formMessageAbout').serializeArray();
// 	//console.log(dataContacts);
// 	sendS(dataContacts);
// });

	$('.consult').on('click', function(){
		  $('.glassPopup').addClass('open');
	});

	$('.skidos').on('click', function(){
			$('.winPopup').addClass('skidosik');
		  $('.glassPopup').addClass('open');
	});

	$('.closeWin').on('click', function(){
			  $('.glassPopup').removeClass('open');
				$('.winPopup').removeClass('skidosik');
	});

	$('.btnMM').on('click', function(){
			  $('.mainMenu').toggleClass('open');
	});

	$('.sliderImages').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true
	});

	$('.lSl').on('click', function(){
		$(this).siblings(".sliderImages").slick('slickPrev');
	});

	$('.lSr').on('click', function(){
		$(this).siblings(".sliderImages").slick('slickNext');
	});

	$('.logo').click(function(event) {
		event.preventDefault();
		$('body,html').animate({scrollTop:0},800);
	});

	$('a[href^="#"]').on('click', function(event) {
		event.preventDefault();
		$('.mainMenu').removeClass('open');
		var sc = $(this).attr("href"),
				dn = $(sc).offset().top - 108;
		$('html, body').animate({scrollTop: dn}, 1000);
	});

});

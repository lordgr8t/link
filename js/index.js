// START HIDES
$('.load-block').hide();
$('.link-block').hide();

// CENTER WRAPPER
let body_height = $(window).height() / 2 - 100;
let half_wrapper_height = $('.wrapper').height() / 2;
let currentHeight = body_height - half_wrapper_height;
$('.wrapper').css({'marginTop' : currentHeight});

// LANG PICKER
$('.lang-picker .ru').bind("click", function() {
	$('.selector').removeClass("selector-anim-right");
	$('.selector').addClass("selector-anim-left");
	$('.lang-picker .ru').addClass("cfff");
	$('.lang-picker .en').removeClass("cfff");	
	$('.lang-picker .en').addClass("c000");
	ru();	
});
$('.lang-picker .en').bind("click", function() {
	$('.selector').addClass("selector-anim-right");
	$('.selector').removeClass("selector-anim-left");
	$('.lang-picker .ru').addClass("c000");
	$('.lang-picker .ru').removeClass("cfff");
	$('.lang-picker .en').addClass("cfff");
	en();	
});
function en() {
	$('.hello-block p').text("Cut link");
	$('.hello-block input').attr("placeholder", "Your link");
	$('.hello-block .my-btn').text("Cut");
	$('.link-block p').text("Your shortened link");
	$('.link-block .my-btn').text("Cut something else");	
};
function ru() {
	$('.hello-block p').text("Сократить ссылку");
	$('.hello-block input').attr("placeholder", "Ваша ссылка");
	$('.hello-block .my-btn').text("Сократить");
	$('.link-block p').text("Ваша сокрщёенная ссылка");
	$('.link-block .my-btn').text("Сократить еще что-нибудь");
};

// CUT
$('.hello-block .my-btn').bind("click", function() {	
	let link = $('.hello-block input').val();
	$.ajax({
		url: "vendor/cut.php",
		type: "POST",
		data: ({link: link}),
		dataType: "text",
		beforeSend: funcB,
		success: funcS
	});	
});
function funcB(){
	// alert("data proces");
};
function funcS(data) {
	if (data == "invalid") {
		let testlang = $('.hello-block .my-btn').text();
		if (testlang == "Cut") {
			$('body').append('<span class="error">It doesn\'t look like a link</span>');			
		}
		if (testlang == "Сократить") {
			$('body').append('<span class="error">Это не похоже на ссылку</span>');			
		}
	}	
	else{
		$('.link-block .link').html(data);
		$('.link-block .enter').attr('href', data);
		$('.hello-block').slideUp(500);
		$('.load-block').slideDown(500);
		setTimeout(function(){
			$('.load-block').slideUp(500);
			$('.link-block').slideDown("done");
		}, 1500);
	}

};

// CUT SMTH ELSE
$('.link-block .my-btn').bind("click", function() {
	$('.link-block').slideUp(500);
	$('.hello-block').slideDown(500);
	$('.hello-block input').val('');
});

// COPY LINK
function copytext(el) {
	var $tmp = $("<input>");
	$("body").append($tmp);
	$tmp.val($(el).text()).select();
	document.execCommand("copy");
	$tmp.remove();
};

// DELL ERROR
function close() {
	$(this).slideUp(300);
}
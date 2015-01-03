jQuery(document).ready(function($) {
	//Alternating Rows
	$("#subpage .sub_item:even").addClass("alt");
	
	//Content Formatting
	//Accordion
	$('div.accordion> div').hide();  
	  $('div.accordion> h3').click(function() {
	    $(this).next('div').slideToggle('fast')
	    .siblings('div:visible').slideUp('fast');
	});
	
	//Tabs
	$('.tab-menu li a').click(function(event) {
	    event.preventDefault();
	    $('.dynamic').hide();
	    $('.tab-menu li a').removeClass('current');
	    var parent = $(event.target).parent();
	    $('.dynamic.' + parent.attr('class')).fadeIn();
	    parent.find('a').addClass('current');
	});
	
	//Equal Columns
	var max_height = 0;
	$("div.third").each(function(){
	    if ($(this).height() > max_height) { max_height = $(this).height(); }
	});
	$("div.third").height(max_height);


});

$("tr:not(:first-child)").each(function (index ) {
	$(this).css('animation-delay',index *0.5 +'s');
 });
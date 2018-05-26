$( document ).ready(function() {
    //Otaku Voice Sidebar Advertising Code Insertion Script

    //Read Page for Advertising Space
    var OVSidebar = $('aside').find('.OV-SidebarOther').length; //Advertising Location Space
    var OVSideContentHeight = $('.OV-Sidebar:last').outerHeight();

    //Add Stickiness to the last sections on the sidebar
    $('.OV-Sidebar:last').addClass('sticky');
    $('.OV-SidebarOther:last').css( 'position', 'sticky' );
    $('.OV-SidebarOther:last').css( 'top' , (OVSideContentHeight + 32) );
    $('.OV-SidebarOther:last').css( 'margin-bottom', '0');
	
	var AdUnitNum = 1;
	var LoadedAdUnits = 0;
	
	var AdUnitPlaceholderA = "<!--Rectangle Ad Unit #";
	var AdUnitPlaceholderB = " --><div id='Rectangle-";
	var AdUnitPlaceholderC = "' class='rectangle-adunit'></div>"
	var AdUnit = "<ins class='adsbygoogle' style='display: block;' data-ad-client='ca-pub-8642963533812241' data-ad-slot='9190203971' data-ad-format='horizontal, rectangle'></ins>"

    $('aside > .OV-SidebarOther').each(function(i) {
		var TheAdPlaceholder = AdUnitPlaceholderA + AdUnitNum + AdUnitPlaceholderB + AdUnitNum + AdUnitPlaceholderC;
        $(this).html(TheAdPlaceholder);
		AdUnitNum++
        //console.log(i);
    });
	
	var CheckView = setInterval(function(CheckViewability)
    {
       	var WindowBottom = $( window ).height() + $( window ).scrollTop(); //Check the height of the window and the distance to top beyond viewport
        var ArticleBottom = $('article').height() + $('article').scrollTop(); //Check the height of the article and the distance to the top
		var DocumentBottom = $( document ).height(); //Check the total height of the document

		$('.rectangle-adunit').each(function(j) {
			var CurrentRectangle = "Rectangle-" + (j + 1);
			var CurrentRectangleHeight = $(this).offset().top;

			if( (WindowBottom + 100) >= CurrentRectangleHeight && !$(this).hasClass('loaded')) {
				$(this).after(AdUnit);
				(adsbygoogle = window.adsbygoogle || []).push({ params: { google_ad_channel: my_google_ad_channel} });

				$(this).addClass('loaded'); //Set class of ad unit as loaded
				console.log(CurrentRectangle + ' has loaded');
				LoadedAdUnits++; //Increment total ad load number

				if( LoadedAdUnits == AdUnitNum ) {clearInterval(CheckView); } //If there are not more units to be loaded, end the interval
			}
		});
    }, 50); //Set interval for 0.1s
	
});
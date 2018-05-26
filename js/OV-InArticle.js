$( document ).ready(function() {
    //Otaku Voice Advertising Code Insertion Script

    //Read Article for Total Character Count and Paragraph Count
    var TotalParagraphs = $("article").find("p").length; //Paragraph Count

    var TotalWordCount = 0;
    $('article > p').each(function(i) {
        //Check the total words in a paragraph
        var CurrentParagraph = $(this).text().split(' ').length;
        TotalWordCount += CurrentParagraph;
        });

    var blocked = false;

    //Check the location of the first ad unit
    var CurrentParagraph = 1;
	var N = 1; //Set the starting point of the Fibonacci Sequence
	var AdUnitNum = 0; //Set the starting number of ad units
	var LoadedAdUnits = 0; //Set the starting number of loaded ad units
	
	var AdUnitPartA = "<!--Leaderboard Ad Unit #";
	var AdUnitPartB = " --><div id='Leaderboard-";
<<<<<<< HEAD
	var AdUnitPartC = "' class='leaderboard-adunit'><ins class='adsbygoogle' style='display: none;' data-ad-client='ca-pub-8642963533812241' data-ad-slot='4173681018' data-ad-format='horizontal'></ins></div>"
=======
	var AdUnitPartC = "' class='leaderboard-adunit'><ins class='adsbygoogle' style='display: block;' data-ad-client='ca-pub-8642963533812241' data-ad-slot='8277158463' data-ad-format='horizontal'></ins></div>"
>>>>>>> 32141ffaf1eed6e51b5f0abd9da9b627909dc0ff

    //Function searches the article for all spots to place an ad unit
    $('article > p').each(function(i) {
		
		//Check the paragraph number against the Fibonacci Sequence and load a unique ad unit
		if (CurrentParagraph == fibonacci(N) && CurrentParagraph != 2 && CurrentParagraph < TotalParagraphs) {
<<<<<<< HEAD
			var TheAdUnit = AdUnitPartA + AdUnitNum + AdUnitPartB + AdUnitNum + AdUnitPartC;
			$(this).after(TheAdUnit);
			N++;
			AdUnitNum++
=======
			AdUnitNum++
			var TheAdUnit = AdUnitPartA + AdUnitNum + AdUnitPartB + AdUnitNum + AdUnitPartC;
			$(this).after(TheAdUnit);
			N++;
			console.log('Loaded Ad Unit: Leaderboard-' + AdUnitNum);
>>>>>>> 32141ffaf1eed6e51b5f0abd9da9b627909dc0ff
		}
		
		//Check if the paragraph number in order to add a skip to the Fibonacci Sequence
		if(CurrentParagraph == 2) {
			N++;
		}
		
        CurrentParagraph++;
    });
	
    //Send Load Call for Adsense
    [].forEach.call(document.querySelector('.adsbygoogle'), function(){
        (adsbygoogle = window.adsbygoogle || []).push({ params: { google_ad_channel: my_google_ad_channel} });
    });
<<<<<<< HEAD
=======
	console.log('After Adsense load');
>>>>>>> 32141ffaf1eed6e51b5f0abd9da9b627909dc0ff
		
	var CheckView = setInterval(function(CheckViewability)
    {
       	var WindowBottom = $( window ).height() + $( window ).scrollTop(); //Check the height of the window and the distance to top beyond viewport
        var ArticleBottom = $('article').height() + $('article').scrollTop(); //Check the height of the article and the distance to the top
		var DocumentBottom = $( document ).height(); //Check the total height of the document

		$('.leaderboard-adunit').each(function(j) {
			var CurrentLeaderboard = "Leaderboard-" + (j + 1);
			var CurrentLeaderboardHeight = $(this).offset().top;

			if( (WindowBottom + 100) >= CurrentLeaderboardHeight && !$(this).hasClass('loaded')) {
				$('.adsbygoogle', this).css('display', 'block'); //Final load of the ad unit
				$(this).addClass('loaded'); //Set class of ad unit as loaded
				console.log(CurrentLeaderboard + ' has loaded');
				LoadedAdUnits++; //Increment total ad load number

				if( LoadedAdUnits == AdUnitNum ) {clearInterval(CheckView); } //If there are not more units to be loaded, end the interval
			}
		});
    }, 250); //Set interval for 0.1s

	//This function returns the fibonacci sequence in order starting at 1
	function fibonacci(num) {
	
		if (num <= 1) return 1;
  		return fibonacci(num - 1) + fibonacci(num - 2);
	}
});
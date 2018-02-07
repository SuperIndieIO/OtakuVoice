$( document ).ready(function() {
    //Otaku Voice Advertising Code Insertion Script

    //Read Article for Total Character Count and Paragraph Count
    var OVParagraphs = $("article").find("p").length; //Paragraph Count

    var OVWordCount = 0;
    $('article > p').each(function(i) {
        //Check the total words in a paragraph
        var CurrentParagraph = $(this).text().split(' ').length;
        OVWordCount += CurrentParagraph;
        });

    var blocked = false;
    if($.ads == undefined) {
        blocked = true;
    }
    else {
        blocked = false;
    }

    var AdUnitA = ""
    var AdUnitB = ""
    var AdUnitB = ""

    if ( blocked ) {
        //Setup House Ads for the Ad Units
        //TODO: Creatives
        AdUnitA = "<div class='HouseAd' style='background-color: #0277BD; width: 100%; height: 100px; margin: 8px auto; max-height: 60px; max-width: 468px'></div>";
        AdUnitB = "<div class='HouseAd' style='background-color: #0277BD; width: 100%; height: 100px; margin: 8px auto; max-height: 60px; max-width: 468px'></div>";
        AdUnitC = "<div class='HouseAd' style='background-color: #0277BD; width: 100%; height: 100px; margin: 8px auto; max-height: 60px; max-width: 468px'></div>";

    }
    else {
        //Setup Creatives for the Ad Units
        //TODO: Creatives
        AdUnitA = '<!-- OtakuVoice-InArticle-A --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8642963533812241" data-ad-slot="8277158463" data-ad-format="horizontal"></ins>';
        AdUnitB = '<!-- OtakuVoice-InArticle-B --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8642963533812241" data-ad-slot="6778096736" data-ad-format="horizontal"></ins>';
        AdUnitC = '<!-- OtakuVoice-InArticle-C --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8642963533812241" data-ad-slot="9307346713" data-ad-format="horizontal"></ins>';
    }

    //Change Creative to a House Ad
    var HouseAdChance = 0;
    var HouseAdFloorA = Math.floor(Math.random()*100) + 1;
    var HouseAdFloorB = Math.floor(Math.random()*100) + 1;
    var HouseAdFloorC = Math.floor(Math.random()*100) + 1;
    var HouseAd = "<iframe src='http://localhost:8888/OtakuVoice/wp-content/themes/OtakuVoice/house/house.html'></iframe>";
    console.log("%Chance of House Ad " + HouseAdChance + "%");
    console.log("House Ad Floor A " + HouseAdFloorA);
    console.log("House Ad Floor B " + HouseAdFloorB);
    console.log("House Ad Floor C " + HouseAdFloorC);

    if (HouseAdFloorA <= HouseAdChance) { AdUnitA = HouseAd; }
    if (HouseAdFloorB <= HouseAdChance) { AdUnitB = HouseAd; }
    if (HouseAdFloorC <= HouseAdChance) { AdUnitC = HouseAd; }

    //Logic Variables for Ad Loading
    var FirstAdLoaded = false;
    var SecondAdLoaded = false;
    var ThirdAdLoaded = false;

    //Check the location of the first ad unit
    var CurrentParagraph = 1;
    var CurrentWordCount = 0;

    //Function searches the article for all spots to place an ad unit
    $('article > p').each(function(i) {
        //Check the total words per paragraph
        var TotalWords = $(this).text().split(' ').length;
        //console.log('Current Paragraph Total Words: ' + TotalWords);
        CurrentWordCount += TotalWords;

        //Check placement on the first ad unit
        if ((CurrentWordCount >= 200 && CurrentWordCount + 25 < OVWordCount && FirstAdLoaded == false) || (CurrentWordCount >= 175 && CurrentParagraph >= 3 && FirstAdLoaded == false && CurrentWordCount + 25 < OVWordCount)) {
            $(this).after(AdUnitA);
            FirstAdLoaded = true;
            //console.log('Placed the First Ad Unit');//DEBUG Placing Units
        }
        //Check placement on the second ad unit
        if ((CurrentWordCount >= 400 && CurrentWordCount + 25 < OVWordCount && SecondAdLoaded == false) || (CurrentWordCount >= 375 && CurrentParagraph >= 6 && SecondAdLoaded == false && CurrentWordCount + 25 < OVWordCount)) {
            $(this).after(AdUnitB);
            SecondAdLoaded = true;
            //console.log('Placed the Second Ad Unit');//DEBUG Placing Units
        }
        //Check placement on the third ad unit
        if ((CurrentWordCount >= 600 && CurrentWordCount + 25 < OVWordCount && ThirdAdLoaded == false) || (CurrentWordCount >= 575 && CurrentParagraph >= 6 && ThirdAdLoaded == false && CurrentWordCount + 25 < OVWordCount)) {
            $(this).after(AdUnitC);
            ThirdAdLoaded = true;
            //console.log('Placed the Third Ad Unit');//DEBUG Placing Units
        }
        //console.log("Current Paragraph: " + CurrentParagraph);
        CurrentParagraph++;
    });

    //DEBUG CONSOLE
    console.log("Total Words: " + OVWordCount);
    console.log("Total Paragraphs: " + OVParagraphs);
    
    //Send Load Call for Adsense
    [].forEach.call(document.querySelectorAll('.adsbygoogle'), function(){
        (adsbygoogle = window.adsbygoogle || []).push({ params: { google_ad_channel: my_google_ad_channel} });
    });
});
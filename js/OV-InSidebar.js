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

    var AdUnitD = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- OtakuVoice-Sidebar-A --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8642963533812241" data-ad-slot="2323846402" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
    var AdUnitE = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- OtakuVoice-Sidebar-B --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8642963533812241" data-ad-slot="8111359701" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
    var AdUnitF = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- OtakuVoice-Sidebar-C --><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8642963533812241" data-ad-slot="9387237765" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
    var HouseAd = "<div class='HouseAd' style='background-color: #0277BD; width: 100%; height: 100px;'></div>";

    var HouseAdChance = 11;
    var HouseAdFloorD = Math.floor(Math.random()*100) + 1;
    var HouseAdFloorE = Math.floor(Math.random()*100) + 1;
    var HouseAdFloorF = Math.floor(Math.random()*100) + 1;
    if (HouseAdFloorD <= HouseAdChance) { AdUnitD = HouseAd; }
    if (HouseAdFloorE <= HouseAdChance) { AdUnitE = HouseAd; }
    if (HouseAdFloorF <= HouseAdChance) { AdUnitF = HouseAd; }
    console.log("House Ad Floor D " + HouseAdFloorD);
    console.log("House Ad Floor E " + HouseAdFloorE);
    console.log("House Ad Floor F " + HouseAdFloorF);

    $('aside > .OV-SidebarOther').each(function(i) {
        if ( i == 0 ) {
        $(this).html(AdUnitD);
        console.log('Inserted Ad Unit D');
        }
        if ( i == 1 ) {
        $(this).html(AdUnitE);
        console.log('Inserted Ad Unit E');
        }
        if ( i == 2 ) {
        $(this).html(AdUnitF);
        console.log('Inserted Ad Unit F');
        }
        console.log(i);
    });
});
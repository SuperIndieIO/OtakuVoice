//SuperIndiePublishing
$( document ).ready(function() {
    if($.ads == undefined) {
        console.log("Ads are disabled");
        var dimensionValue = 'true';
        console.log('Ad Blocking is '+dimensionValue);
        ga('set', 'dimension1', dimensionValue);
    }
    else {
        console.log('Ads are enabled');
        var dimensionValue = 'false';
        console.log('Ad Blocking is '+dimensionValue);
        ga('set', 'dimension1', dimensionValue);
    }
}); 
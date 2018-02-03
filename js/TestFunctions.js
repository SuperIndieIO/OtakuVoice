//Otaku Voice Adsense Code Insertion Script

//Count the number of paragraphs in the article
var OVParagraphs = $("article").find("p").length;
var AdUnitA = "<div style='background-color: #424242; width: 100%; height: 100px; margin: 8px 0;'></div>";
var AdUnitB = "<div style='background-color: #424242; width: 100%; height: 100px; margin: 8px 0;'></div>";
var AdUnitC = "<div style='background-color: #424242; width: 100%; height: 100px; margin: 8px 0;'></div>";
var char_count = $("article").length;
var HouseAdChance = 11;
var HouseAdFloorA = Math.floor(Math.random()*100) + 1;
var HouseAdFloorB = Math.floor(Math.random()*100) + 1;
var HouseAdFloorC = Math.floor(Math.random()*100) + 1;
console.log(count);
console.log("%Chance of House Ad " + HouseAdChance + "%");
console.log("House Ad Floor A " + HouseAdFloorA);
console.log("House Ad Floor B " + HouseAdFloorB);
console.log("House Ad Floor C " + HouseAdFloorC);
console.log("Character Count:" + char_count);

//Run the Random Number Generator for a House Ad
if (HouseAdFloorA <= HouseAdChance) {
    var AdUnitA = "<div style='background-color: #FF0000; width: 100%; height: 100px; margin: 8px 0;'></div>";
}
if (HouseAdFloorB <= HouseAdChance) {
    var AdUnitB = "<div style='background-color: #FF0000; width: 100%; height: 100px; margin: 8px 0;'></div>";
}
if (HouseAdFloorC <= HouseAdChance) {
    var AdUnitC = "<div style='background-color: #FF0000; width: 100%; height: 100px; margin: 8px 0;'></div>";
}
//Determine and place the Ad Units within the body of the article
if (count < 4) {

}
else if (count == 4) {
    //Place a single ad unit after the second paragraph
    $( "article > p:nth-of-type( 2 )" ).after("<div style='background-color: #424242; width: 100%; height: 100px;'></div>");
}
else if (count > 4 && count < 7) {
    //Place two ad units after the second and fourth paragraph
    $( "article > p:nth-of-type( 2 )" ).after(AdUnitA);
    $( "article > p:nth-of-type( 4 )" ).after(AdUnitB);
}
else if (count >= 7 && count < 11) {
    //Place three ad units after the third, sixth, and ninth paragraph
    $( "article > p:nth-of-type( 3 )" ).after(AdUnitA);
    $( "article > p:nth-of-type( 6 )" ).after(AdUnitB);
    $( "article > p:nth-of-type( 9 )" ).after(AdUnitC);
}
else {

}

var word_count = 0;
$('article > p').each(function(i) {
    //Check the total words in a paragraph
    var iTotalWords = $(this).text().split(' ').length;
    word_count += iTotalWords;
    });
console.log(word_count);

var first_count = 0;
$('article > p').slice(0, 2).each(function(i) {
    //Check the total words in a paragraph
    var iTotalWords = $(this).text().split(' ').length;
    first_count += iTotalWords;
    });
console.log(first_count);

var TChar = 0;
var TPar = 1;
while (TChar <= 200 && TPar < count) {

    
    $('article > p').slice(TPar - 1, TPar).each(function(i) {
    //Check the total words in a paragraph
    var iTotalWords = $(this).text().split(' ').length;
    TChar += iTotalWords;
    });
    
    console.log("TChar: " + TChar);
    console.log("TPar: " + TPar);
    TPar++;
}
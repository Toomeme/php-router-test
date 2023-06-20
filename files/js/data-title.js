//Automatically Add data-title attribute to all td's in table from th values

//array to fill with ths
var ths = new Array();

//Clean the text
function trimIt(x) {
    return x.replace(/(^\s+|\s+$)/g, '');
}

// loop through the TH elements
$(".table th").each(function (i) {
    // get and trim HTML of TH
    var thdatatrimmed = trimIt($(this).html());
    // select each column of TDs
    $(".table td:nth-of-type(" + (i + 1) + ")")
        // set the data-value attribute of each element
        .attr("data-title", thdatatrimmed);
});
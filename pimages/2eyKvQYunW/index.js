$(document).ready(function () {

var i = 1.0;
var insertimagew = 40.0;
$("#button1").on('click', function() {
	i++;
	$(this).append(" " + i);
	$(this).clone(true).appendTo("body");
	$("<img src='/Gopher-v0.2/pdesign/pimages/2eyKvQYunW/Yoruba_Mask.gif' style='width:" + insertimagew + "px;'>").prependTo(this);
});

});
jQuery.fn.extend( {
	setbackground: function(color){
		this.each(function () {
            jQuery(this).css("background-color", color)
		});
	}
});
$(document).ready(function() {
    $('.filter-selector').live('wolfSwitchFilterOut', function(event, filtername, elem) {
        if (filtername == 'trumbowyg') {
			elem.trumbowyg('destroy');
        }
    });

    $('.filter-selector').live('wolfSwitchFilterIn', function(event, filtername, elem) {
        if (filtername == 'trumbowyg') {
        	var btnsGrps = jQuery.trumbowyg.btnsGrps;
        	elem.trumbowyg({
        		semantic: true,
        		resetCss: true,
        		autogrow: true,
        		btns: ['viewHTML',
				   '|', 'formatting',
				   '|', btnsGrps.design,
				   '|', 'link',
				   '|', 'insertImage',
				   '|', btnsGrps.justify,
				   '|', btnsGrps.lists,
				   '|', 'insertHorizontalRule',
				   'base64',
				   'colors',
				   'upload']
        	});
        }
    });
});
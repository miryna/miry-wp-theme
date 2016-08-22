jQuery(document).ready(function($) {
    $("#owl-frontmenu1").owlCarousel({
        lazyLoad : true,
        navigation : true,
        navigationText : ["&gt;","&lt;"],
        scrollPerPage : true,
        pagination : true,
        slideSpeed : 200,
        paginationSpeed : 1000,
        rewindSpeed : 1000,
        afterInit : function(elem){
            var that = this
            that.owlControls.prependTo(elem)
        }
    });
    $("#owl-frontmenu2").owlCarousel({
        lazyLoad : true,
        navigation : true,
        navigationText : ["&gt;","&lt;"],
        scrollPerPage : true,
        pagination : true,
        afterInit : function(elem){
            var that = this
            that.owlControls.prependTo(elem)
        }
    });
    $("#owl-frontmenu3").owlCarousel({
        lazyLoad : true,
        navigation : true,
        navigationText : ["&gt;","&lt;"],
        scrollPerPage : true,
        pagination : true,
        afterInit : function(elem){
            var that = this
            that.owlControls.prependTo(elem)
        }
    });

});
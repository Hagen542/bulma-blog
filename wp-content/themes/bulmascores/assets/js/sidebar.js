( function( $ ) {

    let sidebar = $('#secondary');
    let windowHeight;
    let sidebarHeight;

    // Check window Size
    function checkViewSize(){
        windowHeight = $(window).height();
        console.log('Window height: ' + windowHeight);
    }

    // Runs when window is rezised
    function windowRezised(){
        $(window).resize(function(){
            checkViewSize();
            getSidebarHeight();
            removeSticky();
        })
    }

    // Remove the sticky class on the sidebar
    function removeSticky(){
        if(windowHeight < sidebarHeight){
            sidebar.css({'position': 'relative', top: 0});
        }else{
            sidebar.css({'position': 'sticky', top: '1.5rem'});
        }
    }

    // Get height of sidebar
    function getSidebarHeight(){
        sidebarHeight = sidebar.height() + 200;
        console.log('Sidebar height: ' + sidebarHeight);

    }

    // Run initial functions
    checkViewSize();
    windowRezised();
    getSidebarHeight();
    removeSticky();

} )( jQuery );
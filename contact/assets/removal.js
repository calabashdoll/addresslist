if (typeof jQuery != 'undefined') {
    $(function() {
        $(".removal").click(function(){
            if (!confirm('You really want to delete this?')) {
                return false;
            }
        });
    });
}
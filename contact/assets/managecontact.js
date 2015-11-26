if (typeof jQuery != 'undefined') {
    $(function() {
        $("select").change(function(){
            if (this.value) {
                $(this).next().show().children('input').focus();
            }
            else {
                $(this).next().hide().children('input').val('');
            }
        });
        
        $(".addcontactgrouping").click(function(){
            groupcount++;
            var cloning = $("#contactgroupingcontainer").children('div');
            var myclone = cloning.clone(true);
    
            myclone.find('input,select').each(function() {
                this.value = '';
                this.name = this.name.replace(/\[\d*\]/, '[' +groupcount + ']');
            });
            
            myclone.insertBefore($("#lastclone"));
            
            $(this).html('Delete this group').unbind('click').blur();
            $(this).click(function(){
                $(this).parent('div').remove();
            });
            
            return false;
        });
        
        $(".deletecontactgrouping").click(function(){
            $(this).parent('div').remove();        
            return false;
        });
        
        $(".addcontactmethod").click(function() {
            var cloning = $(this).parent().parent();
            var myclone = cloning.clone(true);
            
            myclone.children('select').val('').trigger('change');
            myclone.children('span').children('input').val('');
            
            myclone.insertAfter(cloning);
            
            $(this).html('Delete this info').unbind('click').blur();
            $(this).click(function(){
                $(this).parent().parent().remove();
            });
            
            return false;
        });
        $(".deletecontactmethod").click(function(){
            $(this).parent().parent().remove();
            
            return false;
        });
        
    });
}
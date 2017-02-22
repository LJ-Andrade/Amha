$(function(){

    $('.SearchOption1Btn').click(function(){
        $('#SearchOption1').addClass('Hidden');
        $('#SearchOption2').removeClass('Hidden');
        
        $('#searchPreview').removeClass('Hidden');
        $('#searchPreview1').removeClass('Hidden');
        $('#searchPreview1').html($(this).html());
        $('#searchResult').removeClass('Hidden');
    });
    
    $('.SearchOption2Btn').click(function(){
        $('#SearchOption2').addClass('Hidden');
        $('#SearchOption3').removeClass('Hidden');
        // var data = $(this).attr('data');
        // var info = "";
        // if(data=="con")
        //     info = "> En consultorio";
        // else
        //     info = "> A Domicilio";
        $('#searchPreview2').removeClass('Hidden');
        $('#searchPreview2').html("> "+$(this).html());
    });
    
    $('.SearchBackBtn').click(function(){
        $(this).parent().addClass('Hidden');
        var id = $(this).attr('btn');
        $('#SearchOption'+id).removeClass('Hidden');
        $('#searchPreview'+id).addClass('Hidden');
        if(id==1)
        {
            $('#searchResult').addClass('Hidden');
            $('#searchPreview').addClass('Hidden');
        }
    });
 
});




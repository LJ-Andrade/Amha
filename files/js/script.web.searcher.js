$(function(){

    $('.SearchOption1Btn').click(function(){
        $('#option1').val($(this).attr('data'));
        $('#SearchOption1').addClass('Hidden');
        $('#SearchOption2').removeClass('Hidden');
        
        $('#searchPreview').removeClass('Hidden');
        $('#searchPreview1').removeClass('Hidden');
        $('#searchPreview1').html($(this).html());
    });
    
    $('.SearchOption2Btn').click(function(){
        $('#SearchName').removeClass('Hidden');
        $('#option2').val($(this).attr('data'));
        $('#SearchOption2').addClass('Hidden');
        $('#searchPreview2').removeClass('Hidden');
        if($(this).attr('data')=='con')
        {
            $('#SearchOption3').removeClass('Hidden');
            $(".searchFilters").removeClass('Hidden');
        }
        $('#searchPreview2').html("> "+$(this).html());
        searchDoctors();
        $('#searchResult').removeClass('Hidden');
        
    });
    
    $('#lastSearch').click(function(){
        searchDoctors();
        $('#SearchOption3').addClass('Hidden');
        $('#searchPreview3').removeClass('Hidden');
        if($("#province").val())
        {
            var zone ="";
            if($("#zone").val())
            {
                zone = ", "+$("#zone").find(":selected").text();
            }
            $('#searchPreview3').html('> <i class="fa fa-map"></i> '+$("#province").find(":selected").text()+zone);
        }
        if($("#search").val())
        {
            $('#searchPreview4').removeClass('Hidden');
            $('#searchPreview4').html('> <i class="fa fa-search"></i> '+$("#search").val());
        }else{
            $('#searchPreview4').addClass('Hidden');
        }
    });
    
    $('.SearchBackBtn').click(function(){
        $("#province").val('');
        $("#zone").val('');
        $("#search").val('');
        $('#SearchName').addClass('Hidden');
        $('#searchResult').addClass('Hidden');
        $(this).parent().addClass('Hidden');
        var id = $(this).attr('btn');
        $("#searchPreview3").addClass('Hidden');
        $("#searchPreview4").addClass('Hidden');
        $("#searchPreview4").html('');
        $('#SearchOption'+id).removeClass('Hidden');
        $('#searchPreview'+id).addClass('Hidden');
        $(".searchFilters").addClass('Hidden');
        $('#option2').val('');
        if(id==1)
        {
            $('#option1').val('');
            $('#searchPreview').addClass('Hidden');
            // $('#ClearSearchPreview').addClass('Hidden');
        }
    });
    
    
    $('#ClearSearch').click(function(){
        $('.SearchBackBtn[btn="2"]').click();
        $('.SearchBackBtn[btn="1"]').click();
    });
});
    
    $(function(){
        $("#province").change(function(e){
            e.stopPropagation();
            e.preventDefault();
            if($(this).val())
            {
                var attach = $(this).attr("attach");
                if(attach){
                    var string = 'action=fillzone&value=' + $(this).val();
                    var data = attach.split("/");
                    var target = $("#"+data[0]);
                    var process = data[1];
                    var noData = target.attr("default");
                    
                    if(target.prop("tagName")=="SELECT") noData = '<option value="' + target.attr("firstvalue") + '">' + target.attr("firsttext") + '</option>';
                    if(process)
                    $.ajax({
                        method: 'POST',
                        url: process,
                        data:string,
                        success: function(rs){
                            if(rs)
                            {
                                target.html(rs);
                            }else{
                                console.log('no data');
                                target.html(noData);
                            }
                            $("#zone").val('');
                        }
                    });
                }
            }
        
        });
 
    });




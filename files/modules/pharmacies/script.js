///////////////////////// CREATE/EDIT ////////////////////////////////////
$(function(){
	$("#BtnCreate,#BtnCreateNext").on("click",function(e){
		e.preventDefault();
		if(validate.validateFields('new_company_form') && validateMaps())
		{
			var BtnID = $(this).attr("id")
			if(get['id']>0)
			{
				confirmText = "modificar";
				procText = "modificaci&oacute;n"
			}else{
				confirmText = "crear";
				procText = "creaci&oacute;n"
			}

			confirmText += " la farmacia '"+$("#name").val()+"'";

			alertify.confirm(utf8_decode('¿Desea '+confirmText+' ?'), function(e){
				if(e)
				{
					var process		= '../../library/processes/proc.common.php?object=Pharmacy';
					if(BtnID=="BtnCreate")
					{
						var target		= 'list.php?element='+$('#title').val()+'&msg='+ $("#action").val();
					}else{
						var target		= 'new.php?element='+$('#title').val()+'&msg='+ $("#action").val();
					}
					var haveData	= function(returningData)
					{
						$("input,select").blur();
						notifyError("Ha ocurrido un error durante el proceso de "+procText+".");
						console.log(returningData);
					}
					var noData		= function()
					{
						document.location = target;
					}
					sumbitFields(process,haveData,noData);
				}
			});
		}
	});

	$("input").keypress(function(e){
		if(e.which==13){
			if($("#BtnCreate").is(":disabled"))
			{
				$("#agent_new").click();
			}else{
				$("#BtnCreate").click();
			}
		}
	});
});



// ///////////////////////// LOAD ZONE SELECT ////////////////////////////////
// function fillZoneSelect()
// {
// 	var province = $('#province').val();
// 	var process = '../../library/processes/proc.common.php';

// 	var string      = 'province='+ province +'&action=fillzones&object=GeolocationProvince';

//     var data;
//     $.ajax({
//         type: "POST",
//         url: process,
//         data: string,
//         cache: false,
//         success: function(data){
//             if(data)
//             {
//                 $('#zone-wrapper').html(data);
//             }else{
//                 $('#zone-wrapper').html('<span class="input-group-addon"><i class="fa fa-map-o"></i></span><select id="zone_select" class="form-control select2 selectTags" disabled="disabled" style="width: 100%;"></select>');
//             }
//             if($('#zone_select').length)
// 			{
// 				setZoneSelect2();
// 	            //$('#zone_select').on("change", function () { setZones(); });
// 	            $("#zone").val(0);
// 	            select2Focus();
// 			}
//         }
//     });
// }

///////////////////////// UPLOAD IMAGE ////////////////////////////////////
$(function(){
	$("#image_upload").on("click",function(){
		$("#image").click();	
	});
	
	$("#image").change(function(){
		var process		= '../../library/processes/proc.common.php?action=newimage&object=Pharmacy';
		var haveData	= function(returningData)
		{
			$('#newimage').val(returningData);
			$("#company_logo").attr("src",returningData);
			$('#company_logo').addClass('pulse').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		      $(this).removeClass('pulse');
		    });
		}
		var noData		= function(){console.log("No data");}
		sumbitFields(process,haveData,noData);
	});
});
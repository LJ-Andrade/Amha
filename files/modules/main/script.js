// LOG OK MSG
//---------------------------------------------

function welcomeMessage()
{
  notifyInfo('<img src="' + $(".img-circle").attr("src") + '" width="90" height="90" class="img-circle">' + "<br>" + "<br>" + utf8_decode('¡Bienvenido '+ $("#userfullname").html()) +'!');
}

function dataText()
{
  $(".DataText").hover(function(){
    $(this).children('button').removeClass('Hidden');
  },function(){
    $(this).children('button').addClass('Hidden');
  });
}

function editBtn()
{
  $('.EditBtn').click(function(){
    $(this).parent().parent().parent().children(".Hidden").removeClass('Hidden');
    $(this).parent().parent().addClass('Hidden');
  });
}

function saveEdit()
{
  $('.SaveEdit').click(function(){
    if(validate.validateFields('*'))
    {
      var data = $(this).parent().children('input').val();
      $(this).parent().parent().children(".Hidden").children("span").children("span").html(data);
      $(this).parent().parent().children(".Hidden").removeClass('Hidden');
      $(this).parent().addClass('Hidden');
    }
    
    
  });
}

function showButtons()
{
  $('input').change(function(){
    $('.txC').removeClass('Hidden');
  });
}

$(document).ready(function() {

  if(get['msg']=='logok')
  {
      welcomeMessage();
  }
  
  dataText();
  editBtn();
  saveEdit();
  showButtons();
  
  $("input").keypress(function(e){
	  if(e.which==13){
			$(this).parent().children('span').click();
		}
	});
	
});

$(function(){
	$("#BtnCreate").on("click",function(e){
		e.preventDefault();
		if(validate.validateFields('*'))
		{
			alertify.confirm(utf8_decode('¿Desea guardar los cambios realizados?'), function(e){
				if(e)
				{
					var process		= '../../library/processes/proc.common.php?object=Configuration';
					var target		= 'main.php?msg=success';
					
					var haveData	= function(returningData)
					{
						$("input,select").blur();
						notifyError("Ha ocurrido un error durante el proceso de modificaci&oacute;n.");
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
});

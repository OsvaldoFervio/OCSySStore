function login(){
	
	$.ajax({
		url: 'Login/validatetest',
		type: 'POST',
		data: $("#frm_login").serialize(),
		success: function(err){
			try{
			var json = JSON.parse(err);
			document.location.replace(json.url);
			} catch(e){
			console.error('error in login process',e);
			}
			
		},
		statusCode: {
			400: function(XMLHttpRequest, textStatus, errorThrown){
				$("#email > input").removeClass('is-invalid');
				$("#password > input").removeClass('is-invalid');
				var json = JSON.parse(xhr.responseText);
				if(json.email.length != 0 ){
					$("#email >div").html(json.email);
					$("#email >input").addClass('is-invalid');
				}
				if(json.password.length != 0 ){
					$("#password >div").html(json.password);
					$("#password >input").addClass('is-invalid');
				}
		},
		401: function(XMLHttpRequest, textStatus, errorThrown){
			$("#password >input").addClass('is-invalid');
              console.log(textStatus);
             alert("rechazado error: 401");
			$("#alert").html('<div class="alert alert-danger" role="alert"></div>' );
			}		
		}
    	});
}




function test(){
    
    var respuesta='';
    $.ajax({
        url: 'Login/test',
        type: 'POST',
        data: $("#frm_cita").serialize(),
        success: function(respuesta, textStatus) {
                console.log(textStatus);
                alert('Se testeo correctamente.');
              },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert('Error! no se pudo testear');
        }            
});
}
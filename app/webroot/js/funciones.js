var js = jQuery.noConflict(); 
js(document).ready(function(){
				js("#OrderCompanyId").change(function(){
					js.ajax({
						type: "GET",
						url:"../orders/lista_municipios/"+js(this).val(),
						//data:"id"+js('#OrderCompanyId').val(),
						beforeSend: function(){
							js('#imgcargas').html('<div class="rating-flash" id="cargando_div">\n\
							<img src="../img/kind-5.gif" whith="60px;" height="60px;"/></div>');
							
						},
						success: function(respuesta){
							js('#imgcargas').html(respuesta);
							
						}
						
					});
				});
				
});


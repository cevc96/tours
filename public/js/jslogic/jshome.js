function goToDetalleCard(num){
	$.ajax({
		data  : {card : num},
		url   : 'c_main/redirectToDetalleCard',
		type  : 'POST',
		async : false
	})
	.done(function(data){
		data = JSON.parse(data);
		console.log(data.url);
		window.open(data.url, '_blank');
		
	});
}

function showCardBySelected(id){
	console.log(id);
	$(id).css('display','block');
}

function solicitarReserva(){
	$("#myModal").modal()
}

function logout(){
	$.ajax({
		url   : 'c_main/logout',
		type  : 'POST',
		async : false
	})
	.done(function(data){
		data = JSON.parse(data);
		window.location.replace(data.url);
		
	});
}
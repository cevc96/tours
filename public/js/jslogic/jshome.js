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
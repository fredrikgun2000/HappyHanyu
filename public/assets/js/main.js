$(document).ready(function(){
	random();
})

$(document).on('click','#nextbtn',function(){
	random();
})

function random() {
	$.ajax({
		url:'/datarandom',
		method:'get',
		success:function(data){
			$('#datarandom').html(data);
		}
	})
}
function addTocart(id){
	$.ajax({
		url: "cart_proccess.php",
		type: "POST",
		data: {gia_tri: id},
		success: function(data, success){
			//console.log(data);
			alert("Thêm mới giỏ hàng thành công");
		},

	});
}
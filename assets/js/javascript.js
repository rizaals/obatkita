// increment value onclick ->> transaksi/input pesanan
function incrementValue() {
	var value = parseInt(document.getElementById('jumlahBarang').value, 10);
	value = isNaN(value) ? 1 : value;
	value++;
	document.getElementById('jumlahBarang').value = value;
}

// decrement value onclick ->> transaksi/input pesanan
function decrementValue() {
	var value = parseInt(document.getElementById('jumlahBarang').value, 10);
	if (value <= 1 ) {
		alert("Pesanan Minimal 1 Obat");
	} else {
		value = isNaN(value) ? 1 : value;
		value--;
		document.getElementById('jumlahBarang').value = value;
	}
}

// tampilkan rows baru saat di klik
$(document).ready(function() {
	var count = 0;
	$("#btnTambahBarang").click(function(){
		count += 1;
		
		if (count > 10) {
			alert("Barang Tidak Boleh Lebih Dari 10 !");
		} else {

			$('#panelBarang').append(

					'<div id="itemBarang'+count+'" class="row itemBarang">'

						+'<div class="col-md-1">'
							+'<div class="form-group">'
								+'<label class="control-label">Nomor :</label> <br>'
								+'<span id="nomor'+count+'">'+count+'</span>'
							+'</div>'
						+'</div>'

						+'<div class="col-md-4">'
							+'<div id="namaBarang'+count+'" class="form-group">'
								+'<label id="labelBarang'+count+'" class="control-label">Nama Barang :</label>'
								+'<input id="namaBarang'+count+'" type="text" class="form-control flat" name="namaBarang'+count+'">'
							+'</div>'
						+'</div>'

						+'<div class="col-md-2">'
							+'<label class="control-label">Quantity</label>'
							+'<div class="input-group">'
								+'<span class="input-group-btn">'
									+'<button class="btn btn-default flat" type="button" onclick="decrementValue'+count+'()"><i class="fa fa-minus"></i></button>'
								+'</span>'
								+'<input id="jumlahBarang'+count+'" type="text" class="form-control text-center" value="0" name="jumlahBarang'+count+'">'
								+'<span class="input-group-btn">'
									+'<button class="btn btn-default flat" type="button" onclick="incrementValue'+count+'()"><i class="fa fa-plus"></i></button>'
								+'</span>'
							+'</div>'
						+'</div>'

						+'<div class="col-md-2">'
							+'<div class="form-group">'
								+'<label class="control-label">Harga Satuan :</label> <br>'
								+'<span id="harga'+count+'">Rp 14.000</span>'
							+'</div>'
						+'</div>'

						// +'<div class="col-md-1">'
						// 	+'<div class="form-group" style="margin-top:15px;">'
						// 		+'<a href="#" class="remove_item btn btn-danger flat"><i class="fa fa-close"><i></a>'
						// 	+'</div>'
						// +'</div>'

					+'</div>'
			);

		}

	});

	// $(".remove_item").live('click', function (ev) {
	// 	if (ev.type == 'click') {
	// 		$(this).parents(".itemBarang").fadeOut();
	// 		$(this).parents(".itemBarang").remove();
	// 	}
	// });
});
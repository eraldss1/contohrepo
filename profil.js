function cek(){
	var pergi = document.form.tujuan.value;
	var jenis = document.form.Pelanggan.value;
	var jumlah = document.form.jumlaht.value;
    var diskon = 0;
    var tiket = 0;

    if (pergi=='bali') tiket=1000000;
    else if (pergi=='rajaampat') tiket=500000;
    else if (pergi=='danautoba') tiket=500000;
    else if (pergi=='pulaukomodo') tiket=1000000;
    else if (pergi=='labuanbajo') tiket=300000;
    else if (pergi=='lombok') tiket=500000;
    else if (pergi=='misool') tiket=300000;
    else if (pergi=='belitung') tiket=700000;
    else if (pergi=='sombori') tiket=1000000;
    else if (pergi=='salissingan') tiket=500000;
    else tiket=0;

	if (jenis=='Member') diskon=0.1*tiket*jumlah;
    else diskon=0*tiket*jumlah;

    
	document.form.totalp.value = "Rp. "+(jumlah*tiket) ;

	document.form.diskon.value = "Rp. "+diskon ;

    document.form.totald.value = "Rp. "+(jumlah*tiket-diskon);
    
    document.form.hargat.value = "Rp. "+tiket ;
	
				
}

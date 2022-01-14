var listItem = localStorage.getItem("listItem") !== null? JSON.parse(localStorage.getItem("listItem")) : []
var indexForm = document.getElementById('index')
var nama = document.getElementById('nama')
var kuantitas = document.getElementById('kuantitas')
var satuan = document.getElementById('satuan')
var harga = document.getElementById('harga')
var dicount = document.getElementById('discount')
var totalKeseluruhan = 0
var totalItem = 0

window.onload = function () {
	loadData()
}

function loadData () {
	let element = '<table class="table table-hover table-striped"><tr><th>Nama</th><th>Kuantitas</th><th>Satuan</th><th style="text-align:right;">Harga</th><th style="text-align:right;">Total</th><th></th></tr>'
	totalKeseluruhan = 0
	totalItem = 0
	if (listItem.length > 0) {
		listItem.forEach((item, index) => {
			element += '<tr><td>'+item.nama+'</td><td>'+formatToNumber(item.kuantitas)+'</td><td>'+item.satuan+'</td><td style="text-align:right;">'+formatToRupiah(item.harga)+'</td><td style="text-align:right;">'+formatToRupiah(item.kuantitas * item.harga)+'</td><td><button class="btn btn-success mr-3" title="Edit" onclick="getItem('+index+')"><i class="fa fa-pencil"></i></button><button class="btn btn-danger" title="Hapus" onclick="remove('+index+')"><i class="fa fa-trash"></button></td></tr>'
			totalKeseluruhan += item.kuantitas * item.harga
			totalItem = listItem.length
		})
	} else {
		element += '<tr><td colspan="6" style="text-align:center;">Tidak ada data untuk saat ini</td></tr>'
	}
	element += '<tr><td colspan="4"><strong>Total Item</strong></td><td style="text-align:right; font-weight: bold;">' + formatToNumber(totalItem) + '</td><td></td></tr>'
	element += '<tr><td colspan="4"><strong>Sub Total</strong></td><td style="text-align:right; font-weight: bold;">' + formatToRupiah(totalKeseluruhan) + '</td><td></td></tr>'
	element += '<tr><td colspan="4"><strong>Diskon</strong></td><td style="text-align:right; font-weight: bold;">' + formatToNumber(parseInt(localStorage.getItem("diskon"))) + '%</td><td></td></tr>'
	element += '<tr><td colspan="4"><strong>Total keseluruhan</strong></td><td style="text-align:right; font-weight: bold;">' + formatToRupiah(totalKeseluruhan - (totalKeseluruhan * parseInt(localStorage.getItem("diskon")) / 100)) + '</td><td></td></tr>'
	element += '</table>'
	document.getElementById('load-data').innerHTML = element
}

function resetForm() {
	index.value = ''
	nama.value = null
	kuantitas.value = null
	satuan.value = null
	harga.value = null
}

function store() {
	if (index.value === '') {
		if (listItem.filter(item => item.nama === nama.value).length > 0) {
			alert('Item sudah ada di dalam list. Jika ada perubahan silahkan lakukan pengeditan di menu edit')
		} else {
			listItem.push(
				{
					id: listItem !== null? listItem.length + 1 : 1,
					nama: nama.value,
					kuantitas: parseInt(kuantitas.value),
					satuan: satuan.value,
					harga: parseInt(harga.value),
				}
			)
			localStorage.setItem("listItem", JSON.stringify(listItem))
		}
	} else {
		listItem[index.value].nama = nama.value
		listItem[index.value].kuantitas = parseInt(kuantitas.value)
		listItem[index.value].satuan = satuan.value
		listItem[index.value].harga = parseInt(harga.value)
		localStorage.setItem("listItem", JSON.stringify(listItem))
	}
	resetForm()
	loadData()
}

function getItem(index) {
	indexForm.value = index
	nama.value = listItem[index].nama
	kuantitas.value = listItem[index].kuantitas
	satuan.value = listItem[index].satuan
	harga.value = listItem[index].harga
}

function remove (index) {
	let result = confirm("Yakin mau hapus data?")
	if (result) {
		listItem.splice(index, 1);
		localStorage.setItem("listItem", JSON.stringify(listItem))
		loadData()
	}
}

function formatToRupiah (value) {
	if(value !== undefined)
	return 'Rp. ' + value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + ',-'
}

function formatToNumber (value) {
	return value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}

function print () {
	let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150')
	mywindow.document.write('<html><head><title>INVOICE_'+ new Date().toLocaleString() +'</title>')
	mywindow.document.write('</head><body><h1>Invoice Tanggal ' + new Date().toLocaleString() + '</h1>')
	let element = '<table border="1"><tr><th>Nama</th><th>Kuantitas</th><th>Satuan</th><th>Harga</th><th>Total</th></tr>'
	let totalKeseluruhan = 0
	let totalItem = 0
	listItem.forEach((item, index) => {
		element += '<tr><td>'+item.nama+'</td><td>'+formatToNumber(item.kuantitas)+'</td><td>'+item.satuan+'</td><td>'+formatToRupiah(item.harga)+'</td><td>'+formatToRupiah(item.kuantitas * item.harga)+'</td></tr>'
		totalKeseluruhan += item.kuantitas * item.harga
		totalItem = listItem.length
	})
	element += '<tr><td colspan="4">Total Item</td><td>' + formatToNumber(totalItem) + '</td></tr>'
	element += '<tr><td colspan="4">Total keseluruhan</td><td>' + formatToRupiah(totalKeseluruhan) + '</td></tr>'
	element += '</table>'
	mywindow.document.write(element)
	mywindow.document.write('</body></html>')
	mywindow.document.close()
	mywindow.focus()
	mywindow.print()
	mywindow.close()
}

function addDiscount () {
	localStorage.setItem("diskon", dicount.value)
	$("#modalDiscount").modal("hide");
	dicount.value = 0
	loadData()
}


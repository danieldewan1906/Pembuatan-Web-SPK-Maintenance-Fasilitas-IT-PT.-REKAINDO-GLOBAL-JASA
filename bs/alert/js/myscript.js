const nama_user = document.getElementById('nama_user');
const unit_kerja = document.getElementById('unit_kerja');
const ruang = document.getElementById('ruang');
const no_inventaris = document.getElementById('no_inventaris');
const nama_fasilitas = document.getElementById('nama_fasilitas');
const merk = document.getElementById('merk');
const jenis_kerusakan = document.getElementById('jenis_kerusakan');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
	let messages = []
	if (nama_user == '' || nama_user == null) {
		messages.push('name is required');
	}

	if (messages.length > 0) {
		e.preventDefault();
		errorElement.innerText = messages.join(', ')
	}
});
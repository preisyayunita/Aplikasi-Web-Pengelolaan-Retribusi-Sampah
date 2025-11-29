function getDesa() {
    var kecamatanId = document.getElementById('kecamatan').value;
  
    $.ajax({
        url: '/pelanggan/getDesaByKecamatan', // Pastikan `baseUrl` sudah didefinisikan
        type: 'POST',
        dataType: 'json',
        data: {
            id_kecamatan: kecamatanId
        },
        success: function(data) {
            console.log(data); // Debugging
            var desaSelect = $('#desa');
            desaSelect.empty();
            desaSelect.append('<option>-- Pilih Desa --</option>');
  
            data.forEach(function(d) {
                desaSelect.append('<option value="' + d.nama_desa + '">' + d.nama_desa + '</option>');
            });
  
            // Jika menggunakan Selectric, refresh dropdown
            $('#desa').selectric('refresh');
        },
        error: function(xhr, status, error) {
            console.error("Error during AJAX request:", status, error);
        }
    });}

  function getTarif() {
    var objectId = document.getElementById('kategori').value;
  
    $.ajax({
        url: '/pelanggan/getTarifByKategori', // Pastikan `baseUrl` sudah didefinisikan
        type: 'POST',
        dataType: 'json',
        data: {
            id_kategori: objectId
        },
        success: function(data) {
            console.log(data); // Debugging
            var objectSelect = $('#keterangan');
            objectSelect.empty();
            objectSelect.append('<option>-- Pilih Desa --</option>');
  
            data.forEach(function(d) {
                desaSelect.append('<option value="' + d.keterangan + '">' + d.keterangan + '</option>');
            });
  
            // Jika menggunakan Selectric, refresh dropdown
            $('#keterangan').selectric('refresh');
        },
        error: function(xhr, status, error) {
            console.error("Error during AJAX request:", status, error);
        }
    });


}
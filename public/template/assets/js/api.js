    function updateNominal() {
        // Mendapatkan elemen select kategori
        const kategoriSelect = document.getElementById("keterangan");
        // Mendapatkan elemen input nominal
        const nominalInput = document.getElementById("nominal");
        
        // Mendapatkan opsi yang dipilih
        const selectedOption = kategoriSelect.options[kategoriSelect.selectedIndex];
        
        // Mengambil nominal dari atribut data-nominal
        const nominalValue = selectedOption.getAttribute("data-nominal");
        
        // Memperbarui input nominal
        nominalInput.value = nominalValue;
    }

$(document).ready(function() {
    $('#angkaForm').submit(function(event) {
        event.preventDefault();

        var angkaArray = [];
        $('.angkaInput').each(function() {
            var val = parseInt($(this).val());
            if (!isNaN(val)) {
                angkaArray.push(val);
            }
        });

        if (angkaArray.length === 4) {
            var min = Math.min.apply(null, angkaArray);
            var max = Math.max.apply(null, angkaArray);

            $('#output').text('Angka Terkecil: ' + min + ', Angka Terbesar: ' + max);
        } else {
            $('#output').text('Pastikan semua inputan diisi dengan angka.');
        }
    });
});

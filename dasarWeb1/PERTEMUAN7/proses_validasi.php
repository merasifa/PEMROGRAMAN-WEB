<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <!-- soal 7.4 -->
        <label for="password">Password:</label> 
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div> <!-- Tempat hasil respon AJAX -->

    <!-- soal 7.2 -->
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); 

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi password (minimal 8 karakter) soal 7.4
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Jika validasi berhasil, kirim data melalui AJAX soal 7.3
                if (valid) {
                    $.ajax({
                        url: 'proses_validasi.php', 
                        type: 'POST',
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            $("#hasil").html(response); 
                        },
                        error: function(xhr, status, error) {
                            $("#hasil").html("Terjadi kesalahan: " + error);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
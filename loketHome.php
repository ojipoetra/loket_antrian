<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="loketHome.css" />

  <!-- boostraps 5.3 -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <main class="container-fluid">
    <nav>
      <h1 class="text-center">
        Selamat datang di <br />
        RS Tonggak Husada
      </h1>
      <h3 class="text-center">Silahkan Ambil Nomor Antrian</h3>
    </nav>
    <div class="r">
      <div class="row justify-content-center">
        <div class="col-6">
          <div class="card text-center">
            <div class="card-header">Nomor Antrian Anda</div>
            <div class="card-body">
                <div class="nomor"></div>
                <button type="submit" onclick="ambilNomorAntrian()" class="counter btn btn-primary fs-2">Ambil Antrian</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> -->
  <script>
    // function ambilNomorAntrian() {
    //   Ambil nomor antrian dari server
    //   fetch("ambil_nomor_antrian.php")
    //     .then((response) => response.text())
    //     .then((nomor_antrian) => {
    //       // Tampilkan nomor antrian di halaman
    //       document.querySelector(".loket_nomor").innerHTML = nomor_antrian;
    //     });
      
    // }
    function ambilNomorAntrian() {
            // Menggunakan AJAX untuk mengirim permintaan ke server
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Menanggapi hasil yang dikembalikan dari server
                    document.getElementById("nomor").innerHTML = "Nomor Antrian Anda: " + xhr.responseText;
                    printNomorAntrian(xhr.responseText);
                }
            };
            xhr.open("GET", "ambil_nomor_antrian.php", true);
            xhr.send();
        }

        function printNomorAntrian(nomor) {
            // Menggunakan JavaScript untuk mencetak nomor antrian
            window.print();
        }
  </script>
</body>

</html>
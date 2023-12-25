<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="loketHome.css" />

  <!-- boostraps 5.3 -->
  <!-- <link
      rel="css/stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    /> -->
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
              <form action="counter.php" method="post" class="d-flex flex-column">
                <input type="text" class="loket_nomor" value="" />
                <button type="submit" name="loket_add" class="counter btn btn-primary fs-2">
                  Ambil Antrian
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> -->
  <script>
    let count = 0;
    const counter = document.querySelector(".counter");
    const loketNomor = document.querySelector(".loket_nomor");
    counter.addEventListener("click", () => {
      count += 1;
      loketNomor.innerHTML = count;
    });
  </script>
</body>

</html>
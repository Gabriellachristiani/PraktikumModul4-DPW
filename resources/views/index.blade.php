<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce></title>
    <!-- bootstrap demo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font awsome icone -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navbar -->
    <nav class= "navbar navbar-expand-lg navbar-light shadow-sm"
    style ="background-color: burlywood ;">
    <div classs ="container">
        <a href="#"class="navbar-brand">TOTOTEDIA</a>
        <button class="navbar-toggler" type="button"data-bs-toggle="collapse"
        data-bs-target="#navbarText"aria-controls="navbar-text" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div class="collapse navbar-collapse"id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav item">
                <a href="pertemuan3.html"class="nav-link active"aria-current ="page">HOME</a>
            </li>
            <li class="nav-item">
                <a href="#"class="nav-link">DASHBOARD</a>
            </li>
            <li class="nav-item">
                <a href="#"class="nav-link">LACAK PAKET </a>
            </li>
        </ul>
        <span class="navbar-nav ml-auto">
            <form class ="containe-fluid justify-content-start">
                <a href="#"class="btn btn-outline-succes"role="button">
                    <i class="fa fa-shopping-cart" aria-hidden ="true">Cart</i>
                </a>
            </form>
        </span>

    </div>
    </div>
</nav>

    <!-- navbar end -->
    <!-- cart -->
    <section class="bg-light-h-100" style="background-color :rgb(102, 51, 51);">
        <div class ="container h-100 py-5">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class ="col-10">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0 text-white">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart
                            </h3>
                        </div>
                        <!-- detail barang -->
                        <div class="class card rounded-3 mb-4">
                        <div class ="ro d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-x1-2">
                                <img src="https://tse4.mm.bing.net/th?id=OIP.GBYUi9xjfV5OtPpB-X6kxQHaGq&pid=Api&P=0&h=180"
                                 alt="Baju" class ="img-fluid rounded-3">
                            </div>
                            <div class="col-md3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">Baju</p>
                                <p><span class = "text-muted">Color:</span>White</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-x1-2 d-flex">
                                <button class="btn btn-link px-2"
                                    onclick="this.parentsNode.querySelector ('input[type=number]'),stepDown()">
                                    <i class="fa fa-minus"aria-hidden ="true"></i>
                                </button>
                                <input type="number" class="form-control form-control-sm"id="form1"
                                min ="1" name="quantity"value="1">
                                <button class="btn btn-link px-2"
                                onclick="this.parentsNode.querySelector ('input[type=number]'),stepUp()">
                                <i class="fa fa-plus"aria-hidden ="true"></i>
                            </button>
                            </div>
                            <div class="clo-md-3 col-lg-2 col-x1-2 offset-lg-1">
                                <h5 class="mb 0"> Rp.100.000</h5>
                            </div>
                        </div>
                        </div>
                        <!-- detail barang end  -->
                        <!-- payment button -->
                        <div class="d-grid gap-2">
                         <button class="btn btn-success" type="button">Pembayaran</button>
                        </div>
                <!-- payment button end -->
          
                </div>
                </div>
                </div>
                </section>
             <!-- cart end -->

    <!-- footer -->
    <footer class="bg-dark" id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 pt-5">
              <h2 class="h2 text-success border-bottom pb-3 border-light logo">TOTOTEDIA</h2>
              <ul class="list-unstyled text-light footer-link-list">
                <li>
                  <i class="fas fa-map-marker-alt fa-fw"></i>Jln. Aja dulu No.2
                </li>
                <li>
                  <i class="fa fa-phone fa-fw"></i>
                  <a href="tel:010-020-0340" class="text-decoration-none">(021) 326 917</a>
                </li>
                <li>
                  <i class="fa fa-phone fa-fw"></i>
                  <a href="mailto:info@company.com" class="text-decoration-none">napagaseneng@hah.com</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4 pt-5">
              <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
              <ul class="list-unstyled text-light footer-link-list">
                <li><a href="index.html" class="text-decoration-none">Home</a></li>
                <li><a href="index.html" class="text-decoration-none">About Us</a></li>
                <li><a href="index.html" class="text-decoration-none">Shop Locations</a></li>
                <li><a href="index.html" class="text-decoration-none">FAQs</a></li>
                <li><a href="index.html" class="text-decoration-none">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="w-100 bg-black py-3">
          <div class="container">
            <div class="row pt-2">
              <div class="col-12">
                <p class="text-left text-light">Copyright &copy; 2022 Dream</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- footer end -->
  
      <!-- Optional JavaScript; choose one of the two! -->
  
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  
    </body>
  </html>
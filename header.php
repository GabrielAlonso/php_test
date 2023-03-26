<header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="product_page.php?currency=<?php echo $_GET['currency'];?>""><img src="img/logo.png" alt="" width="120" height="60"></li></a>
        <li class="mt-2 mx-5">
          <select class="form-select" id="currency_atual">
            <option value="EUR">EUR</option>
            <option value="BRL">BRL</option>
            <option value="USD">USD</option>
          </select>
        </li>
        <li class="mt-3 mx-1">Welcome <?php echo $_SESSION['username'];?>!</li>
        <li class="mt-3 mx-5"><a href="my_shopping.php?currency=<?php echo $_GET['currency'];?>">My Shopping</a></li>
      </ul>
      

      

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="img/user.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="app/logout.php">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
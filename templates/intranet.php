<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title><?=$title?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/src/img/37.ico" />
</head>
<body class="d-flex flex-column vh-100" >
  <header class="navbar navbar-expand-lg  p-0 m-0 d-flex flex-row justify-content-between"  style="background:#455A64">
    <div class="d-flex flex-row align-items-center justify-content-center m-0 p-0" >
        <a class="navbar-brand m-0 p-0" href="/intranet">
        <img src="/src/img/37.ico" height="75px" alt="Logo" loading="lazy"/>
      </a>
    </div>
    <div >
      <form class="d-flex" >
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
    <div>
      <a class="navbar-brand" href="#" >
        <img src="/src/img/user_logo.png" alt="Avatar Logo" style="width:60px;" class="rounded-pill"> 
      </a>
    </div>
  </header>
  <div class="d-flex flex-row h-100" >
    <nav class="navbar d-flex flex-row h-100 align-items-start "  style="background:#455A64">
      <ul class="nav d-flex flex-column ">
        <li class="nav-item align-item-center">
          <a class="navbar-brand " href="/intranet/document">
            <img src="/src/img/file_icon.png" width="60" height="60" alt="">
          </a>
        </li>
        <li class="nav-item align-item-center">
          <a class="navbar-brand " href="/intranet/directory_internal">
            <img src="/src/img/directoryi_icon.png" width="60" height="60" alt="">
          </a>
        </li>
        <li class="nav-item align-item-center">
          <a class="navbar-brand " href="/intranet/directory_partner">
            <img src="/src/img/directoryp_icon.png" width="60" height="60" alt="">
          </a>
        </li>
        <li class="nav-item align-item-center">
          <a class="navbar-brand " href="/intranet/directory_client">
            <img src="/src/img/directoryc_icon.png" width="60" height="60" alt="">
          </a>
          </li>
          <li class="nav-item align-item-center">
            <a class="navbar-brand " href="/intranet/wiki">
              <img src="/src/img/wiki_icon.png" width="60" height="60" alt="">
            </a>
          </li>
      </ul>
    </nav>
    <main class="container py-4 my-4">
      <?=$content?>
    </main>
  </div>
</body>
</html>
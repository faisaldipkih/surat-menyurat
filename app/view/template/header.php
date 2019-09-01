<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <div class="navbar-fixed">
        
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="<?= BASE_URL."profile" ?>">Profile</a></li>
          <li class="divider"></li>
          <li><a href="#!">Logout</a></li>
        </ul>
        <nav class="blue lighten-1">
          <div class="nav-wrapper">
            <a href="<?= BASE_URL."beranda" ?>" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="<?= BASE_URL."beranda" ?>">Beranda</a></li>
              <li><a href="<?= BASE_URL."setting" ?>">Setting</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
          </div>
        </nav>
        
      </div>

      <ul id="dropdown2" class="dropdown-content">
          <li><a href="<?= BASE_URL."profile" ?>">Profile</a></li>
          <li class="divider"></li>
          <li><a href="#">Logout</a></li>
      </ul>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="<?= BASE_URL."beranda" ?>">Beranda</a></li>
        <li><a href="<?= BASE_URL."setting" ?>">Setting</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
        <div class="row">
          <div class="col l3 m12 s12"> 
            <ul class="collapsible">
              <li>
                <div class="collapsible-header"><i class="material-icons">drafts</i>Akun</div>
                <div class="collapsible-body">
                  <a href="<?= BASE_URL."akun" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Super</a>
                  <a href="<?= BASE_URL."surat_keluar_izin_penelitian" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Subag</a>
                  <a href="<?= BASE_URL."surat_keluar_perintah_tugas" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Bidang</a>
                  <a href="<?= BASE_URL."surat_keluar_nota_dinas" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Seksi</a>
                  <a href="<?= BASE_URL."surat_keluar_nota_dinas" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Staf</a>
                </div>
              </li>
              <li>
                <a href="<?= BASE_URL."surat_masuk" ?>"><div class="collapsible-header"><i class="material-icons">mail</i>Surat Masuk</div></a>
              </li>
              <li>
                <a href="<?= BASE_URL."disposisi" ?>"><div class="collapsible-header"><i class="material-icons">description</i>Disposisi</div></a>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">drafts</i>Surat Keluar</div>
                <div class="collapsible-body">
                  <a href="<?= BASE_URL."surat_keluar_rekomendasi" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Rekomendasi</a>
                  <a href="<?= BASE_URL."surat_keluar_izin_penelitian" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Izin Penelitian</a>
                  <a href="<?= BASE_URL."surat_keluar_perintah_tugas" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Perintah Tugas</a>
                  <a href="<?= BASE_URL."surat_keluar_nota_dinas" ?>" class="collapsible-header sisi"><i class="material-icons">add_box</i>Nota Dinas</a>
                </div>
              </li>
              <li>
                <a href="<?= BASE_URL."agenda" ?>"><div class="collapsible-header"><i class="material-icons">event</i>Agenda</div></a>
              </li>
            </ul>
          </div>
          <div class="col l9 m12 s12 collapsible">
            
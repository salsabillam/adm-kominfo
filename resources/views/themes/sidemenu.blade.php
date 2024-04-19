<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/Dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      @if (auth()->user()->role == "superadmin")
      <li class="nav-heading">Data Master</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/Albumfoto">
          <i class="bi bi-image"></i>
          <span>Album</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/Pengguna">
          <i class="bi bi-people-fill"></i>
          <span>Data Pengguna</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Kategori</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/Kategoriberita">
              <i class="bi bi-circle"></i><span>Kategori Berita</span>
            </a>
          </li>
          <li>
            <a href="/Kathalstatis">
              <i class="bi bi-circle"></i><span>Kategori Halaman Statis</span>
            </a>
          </li>
        </ul>
      </li>
      @endif
      <li class="nav-heading">Data Menu</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/Agenda">
          <i class="bi bi-calendar-event-fill"></i>
          <span>Agenda</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/Berita">
          <i class="bi bi-newspaper"></i>
          <span>Berita</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/Dokumen">
          <i class="bi bi-folder-fill"></i>
          <span>Dokumen</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-image"></i><span>Galeri</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/Banner">
              <i class="bi bi-circle"></i><span>Banner</span>
            </a>
          </li>
          <li>
            <a href="/Galerifoto">
              <i class="bi bi-circle"></i><span>Galeri Foto</span>
            </a>
          </li>
          <li>
            <a href="/Galerivideo">
              <i class="bi bi-circle"></i><span>Galeri Video</span>
            </a>
          </li>
          <li>
            <a href="/Headerslide">
              <i class="bi bi-circle"></i><span>Header Slide</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/Statis">
          <i class="bi bi-journal-text"></i>
          <span>Halaman Statis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/Faq">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li>
    </ul>

  </aside>

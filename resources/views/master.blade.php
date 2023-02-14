<!DOCTYPE html>
<html>
<head>
  <title>Belajar Sistem Blade Template Laravel - Ayo Ngoding</title>
</head>
<body>
  <header>
    <h2>Blog Ayo Ngoding</h2>
    <nav>
      <a href="/">HOME</a>
      |
      <a href="{{ url('/tentang') }}">TENTANG</a>
      |
      <a href="#">KONTAK</a>
    </nav>
  </header>
  <hr/>

  <!-- bagian ini menampung judul halaman blog -->
  <h3> @yield('judul') </h3>

  <!-- bagian ini menampung konten blog -->
  @yield('konten')

  <br/>
  <br/>
  <hr/>
  <footer>
    <p>Copyright &copy; 2019 - 2021 <a href="https://www.ayongoding.com/">www.ayongoding.com</a></p>
  </footer>
</body>
</html>

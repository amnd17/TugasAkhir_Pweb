<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak - PT CAMAVION AD-Arc</title>
  <link rel="stylesheet" href="style.css" />
  <script src="script.js" defer></script>
</head>
<body>
  <header>
    <h1>PT CAMAVION AD-Arc</h1>
  </header>

  <nav>
    <a href="index.html">Beranda</a><br>
    <a href="about.html">Tentang Kami</a>
    <a href="services.html">Layanan</a>
    <a href="contact.php">Kontak</a>
  </nav>

  <div class="container">
    <h2>Hubungi Kami</h2>
    <p>Silakan isi form berikut untuk menghubungi kami. Kami akan merespon secepatnya.</p>

    <form name="contactForm" action="send_contact.php" method="POST" onsubmit="return validateContactForm()">
      <label for="name">Nama Lengkap:</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="message">Pesan:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Kirim Pesan</button>
    </form>

    <h3>Informasi Kontak</h3>
    <p><strong>Alamat:</strong> Jl. Merdeka No. 123, Jakarta, Indonesia</p>
    <p><strong>Telepon:</strong> +62 21 1234 5678</p>
    <p><strong>Email:</strong> info@konstruksiarsitektur.co.id</p>

    <h3>Lokasi Kami</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5757200826433!2d110.38069007415618!3d-7.834647677831417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5701a2ae1c23%3A0x173dbeeddc56d9e!2sUniversitas%20Ahmad%20Dahlan%20-%20Kampus%204!5e0!3m2!1sid!2sid!4v1752512913347!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

  <footer>
    <p>© 2025 PT Konstruksi & Arsitektur. All rights reserved.</p>
  </footer>
</body>
</html>
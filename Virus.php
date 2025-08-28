<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran Siswa Baru</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(-45deg, #4facfe, #00f2fe, #43e97b, #38f9d7);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 520px;
      animation: fadeIn 1.5s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: 22px;
      letter-spacing: 1px;
      animation: slideIn 1s ease;
    }

    @keyframes slideIn {
      from { opacity: 0; transform: scale(0.8); }
      to { opacity: 1; transform: scale(1); }
    }

    label {
      font-weight: bold;
      display: block;
      margin: 10px 0 5px;
      color: #444;
    }

    input, select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-bottom: 15px;
      outline: none;
      transition: 0.3s;
    }

    input:focus, select:focus, textarea:focus {
      border-color: #4facfe;
      box-shadow: 0 0 8px rgba(79,172,254,0.6);
      transform: scale(1.02);
    }

    button {
      background: linear-gradient(45deg, #4facfe, #00f2fe);
      color: white;
      padding: 14px;
      border: none;
      border-radius: 10px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      transition: 0.4s;
    }

    button:hover {
      background: linear-gradient(45deg, #43e97b, #38f9d7);
      transform: scale(1.05);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Formulir Pendaftaran Siswa Baru</h2>
    <form action="#" method="post">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="jk">Jenis Kelamin:</label>
      <select id="jk" name="jk" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>

      <label for="agama">Agama:</label>
      <select id="agama" name="agama" required>
        <option value="">-- Pilih --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
      </select>

      <label for="ttl">Tempat, Tanggal Lahir:</label>
      <input type="text" id="ttl" name="ttl" placeholder="Contoh: Jakarta, 10 Januari 2010" required>

      <label for="alamat">Alamat:</label>
      <textarea id="alamat" name="alamat" rows="3" required></textarea>

      <label for="asal_sekolah">Asal Sekolah:</label>
      <input type="text" id="asal_sekolah" name="asal_sekolah" required>

      <label for="no_hp">No. HP Orang Tua:</label>
      <input type="tel" id="no_hp" name="no_hp" pattern="[0-9]{10,13}" placeholder="0812xxxxxxxx" required>

      <button type="submit">Daftar</button>
    </form>
  </div>

</body>
</html>

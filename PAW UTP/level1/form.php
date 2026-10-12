<h2>Daftar Menu</h2>
<table>
    <tr>
        <th>Minuman</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Kopi Susu Tobi</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Americano</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Matcha Latte</td>
        <td>Rp22.000</td>
    </tr>
    <tr>
        <td>Kopi Tubruk</td>
        <td>Rp30.000</td>
    </tr>
    <tr>
        <td>Teh MGM</td>
        <td>Rp100.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    Nama: <!-- Input Text Nama -->
    <input type="text" name="nama" required>
    <br><br>
    Minuman: <!-- Input Pilihan Minuman -->
    <select name="menu">
        <option value="Kopi Susu Tobi">Kopi Susu Tobi</option>
        <option value="Americano">Americano</option>
        <option value="Matcha Latte">Matcha Latte</option>
        <option value="Kopi Tubruk">Kopi Tubruk</option>
        <option value="Teh MGM">Teh MGM</option>
    </select>
    <br><br>
    Jumlah: <!-- Input Jumlah -->
    <input type="number" name="jumlah" value="1" required>
    <br><br>
    Kategori Pelanggan: <!-- Input Pilihan Jenis Pelanggan -->
    <label><input type="radio" name="kategori" value="Reguler" checked> Reguler</label>
    <label><input type="radio" name="kategori" value="Member"> Member</label>
    <br><br>
    <!-- Submit -->
    <button type="submit">Pesan</button>
</form>

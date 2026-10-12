<?php
// Kerjakan mulai dari sini
function rupiah($angka)
{
    return "Rp" . number_format($angka, 0, ",", ".");
}


// JANGAN DIUBAH IF INI
if (!isset($_SESSION["nama"])) {
    echo "<p>Belum ada pesanan.</p>";
} else {
    // Kerjakan ELSE ini

    echo "<table>";
    echo "<tr><td>Nama pelanggan</td><td>" . htmlspecialchars($_SESSION["nama"]) . "</td></tr>";
    echo "<tr><td>Kategori</td><td>" . htmlspecialchars($_SESSION["kategori"]) . "</td></tr>";
    echo "<tr><td>Minuman</td><td>" . htmlspecialchars($_SESSION["menu"]) . "</td></tr>";
    echo "<tr><td>Harga satuan</td><td>" . rupiah($_SESSION["harga"]) . "</td></tr>";
    echo "<tr><td>Jumlah gelas</td><td>" . (int) $_SESSION["jumlah"] . "</td></tr>";
    echo "<tr><td>Subtotal</td><td>" . rupiah($_SESSION["subtotal"]) . "</td></tr>";
    echo "<tr><td>Potongan harga</td><td>" . rupiah($_SESSION["diskon"]) . "</td></tr>";
    echo "<tr><th>Total bayar</th><th>" . rupiah($_SESSION["total"]) . "</th></tr>";
    echo "</table>";
}

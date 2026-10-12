<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini

// Hitung harga
$daftar_harga = [
    "Kopi Susu Tobi" => 18000,
    "Americano" => 15000,
    "Matcha Latte" => 22000,
    "Kopi Tubruk" => 30000,
    "Teh MGM" => 100000,
];
$harga = $daftar_harga[$menu] ?? 0;
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;
if ($kategori === "Member" && $jumlah >= 3) {
    $diskon = intdiv($subtotal, 10);
}

// total harga
$total = $subtotal - $diskon;

// cek valid
$valid = true;
$pesangagal = "";
if ($jumlah < 1) {
    $valid = false;
    $pesangagal = "Jumlah gelas minimal 1. Angka 0 atau negatif tidak bisa diproses.";
} elseif (trim($nama) === "") {
    $valid = false;
    $pesangagal = "Nama pelanggan tidak boleh kosong.";
} elseif ($harga === 0) {
    $valid = false;
    $pesangagal = "Menu yang dipilih tidak ada di daftar.";
} elseif ($kategori !== "Member" && $kategori !== "Reguler") {
    $valid = false;
    $pesangagal = "Kategori pelanggan harus Member atau Reguler.";
}
$pesan = $pesangagal;



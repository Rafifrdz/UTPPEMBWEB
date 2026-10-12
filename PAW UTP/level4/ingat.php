<?php
$lama = (1 * 24 * 60 * 60) + (2 * 60 * 60) + (22 * 60);
setcookie("nama_pelanggan", $nama, time() + $lama, "/");

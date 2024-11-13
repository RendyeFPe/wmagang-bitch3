<?php
// Password yang ingin Anda hash
$password = 'admin123#';

// Menghasilkan hash untuk password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Tampilkan hash
echo "Password hash untuk 'admin123#': " . $hashed_password;

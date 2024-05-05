<?php
function content($m) {
    // Tentukan file content berdasarkan parameter m
    switch ($m) {
        case 'about':
            return 'about.php';
            break;
        case 'proses_pendaftaran':
            return 'proses_pendaftaran.php';
            break;
        default:
            return 'home.php';
            break;
    }
}
?>

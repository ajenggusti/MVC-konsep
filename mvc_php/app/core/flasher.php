<?php
class flasher
{
    // pesan (berhasul /gagal), aksi (tambah/ ubah / hapus), tipe (warning, danger, primary)
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-'. $_SESSION['flash']['tipe'] .' alert-dismissible fade show" role="alert">
                <strong>Data '. $_SESSION['flash']['pesan'] .'</strong>'. $_SESSION['flash']['aksi'] .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
}


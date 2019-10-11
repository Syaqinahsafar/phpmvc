<?php

class Flasher {

    public static function setFlash($order, $action, $characteristic)
    {
        $_SESSION['flash'] = [
            'order' => $order,
            'action' => $action,
            'characteristic' => $characteristic
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['characteristic'] . ' alert-dismissible fade show" role="alert">
                    Mahasiswa Data <strong>' . $_SESSION['flash']['order'] . '</strong> ' . $_SESSION['flash']['action'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
            unset($_SESSION['flash']);
        }
    }
}
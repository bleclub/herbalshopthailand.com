<?php

class security {

    private function setadmin() {
        if ($_SESSION[_ss . 'levelaccess'] == 'admin' || $_SESSION[_ss . 'levelaccess'] == 'superadmin' || $_SESSION[_ss . 'levelaccess'] == 'editor' ) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function setuser() {
        if ($_SESSION[_ss . 'levelaccess'] == 'user') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function check($type = "user") {
        if ($type == "admin" || $type == "superadmin"  || $type == "editor" ) {
            $check = $this->setadmin();
            $dir = "back";
        } else {
            $check = $this->setuser();
            $dir = "front";
        }

        if ($check == FALSE) {
            header("location:" . base_url() . "/" . $dir . "/user/login");
        }
    }

}

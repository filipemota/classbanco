<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author mfilipe
 */

namespace src\classes;

class account {

    private $number;
    private $balance;

    function getNumber() {
        return $this->number;
    }

    function getBalance() {
        return $this->balance;
    }

    function setNumber($number) {
        $this->number = $number;
    }

    function setBalance($balance) {
        $this->balance = $balance;
    }

}

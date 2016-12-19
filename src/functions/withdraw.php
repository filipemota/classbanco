<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of withdraw
 *
 * @author mfilipe
 */

namespace src\functions;

class withdraw {

    public function withdraw(\src\classes\account $account, $number) {
        $balance = $account->getBalance();
        $newBalance = $balance - $number;
        $account->setBalance($newBalance);
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of deposit
 *
 * @author mfilipe
 */

namespace src\functions;

class deposit {

    public function depoistAccount(\src\classes\account $account, $number) {

        $balance = $account->getBalance();
        $newBalance = $balance + $number;
        $account->setBalance($newBalance);

        $account->setBalance($newBalance);
    }

}

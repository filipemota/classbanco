<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testaccount
 *
 * @author mfilipe
 */
require '../src/classes/account.php';
require '../src/functions/deposit.php';
require '../src/functions/withdraw.php';

class testaccount extends \PHPUnit_Framework_TestCase {

    public function testCreateObject() {
        $account = new src\classes\account();
        $account->setBalance(1000);
        $account->setNumber(21);

        print_r(" Acc Number: " . $account->getNumber());
        print_r(" | Balance: " . $account->getBalance());
    }

    public function testDeposiAccount() {
        $account = new src\classes\account();
        $account->setBalance(1000);
        $account->setNumber(21);

        $deposit = new src\functions\deposit();

        $deposit->depoistAccount($account, 500);

        print_r(" Acc Number: " . $account->getNumber());
        print_r(" | Balance: " . $account->getBalance());
    }

    public function testWithdraw() {

        $account = new src\classes\account();
        $account->setBalance(1000);
        $account->setNumber(21);

        $withdraw = new src\functions\withdraw();

        $withdraw->withdraw($account, 300);

        print_r(" Acc Number: " . $account->getNumber());
        print_r(" | Balance: " . $account->getBalance());
    }

}

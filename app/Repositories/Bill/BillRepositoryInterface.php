<?php
/**
 * Created by PhpStorm.
 * User: anhdv
 * Date: 5/9/2018
 * Time: 11:24 AM
 */

namespace App\Repositories\Bill;

/**
 * Class ExampleRepositoryInterface
 * @package App\Repositories
 */
interface BillRepositoryInterface
{
    public function getTotalDB($params);
    public function getBillData($params = false);
    public function getTotalBill($params);
    public function getMoneyByMonth($month);
    public function getByDate(array $dates);
}
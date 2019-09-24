<?php
/**
 * Created by PhpStorm.
 * User: anhdv
 * Date: 5/9/2018
 * Time: 11:24 AM
 */

namespace App\Repositories\Email;

/**
 * Class ExampleRepositoryInterface
 * @package App\Repositories
 */
interface EmailRepositoryInterface
{
    public function checkSend($params);
    public function insertLog($params);
    public function sendEmail($data_config);
    public function getDataByDate($num_date);
    public function makeEmailData($user,$old_date);
    public function getNotSendData($email,$old_date);
    public function sendManyUser($users,$old_date,$subject);
    public function sendSingerUser($user,$old_date,$subject);

}
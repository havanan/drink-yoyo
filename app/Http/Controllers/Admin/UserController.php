<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductCategory;
use App\Model\Table;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function changePass(Request $request){
        $old_pass = $request->get('old_pass');
        $new_pass = $request->get('new_pass');
        $user_id = $request->get('user_id');
        $user_info = $this->getUser($user_id);

        if ($user_info == null){
            dd(1);
            return $this->getMessageType(INFO_EMPTY,'Không có thông tin người dùng');
        }
        if ($this->checkOldPass($old_pass,$user_info['password']) == false){
            return $this->getMessageType(WRONG_PASS,'Mật khẩu hiện tại không đúng');
        }
        if ($this->validatePass($new_pass)){
            return $this->getMessageType(WRONG_FORMAT_PASS,'Mật khẩu bao gồm chữ và số, từ 8-20 ký tự');
        }
        $user_info->password = Hash::make($new_pass);

        if ($user_info->save()){
            return $this->getMessageType(INFO_EMPTY,'Đổi mật khẩu thành công');
        }
        return $this->getMessageType(INFO_EMPTY,'Đổi mật khẩu thất bại');
    }
    public function checkOldPass($old_pass,$user_pass){
        return Hash::check($old_pass,$user_pass);
    }
    public function getUser($id){
        $data = User::find($id);
        return $data;
    }
    public function validatePass($password){
        if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[0-9]).*$#", $password )){
           return true;
        } else {
            return false;
        }
    }

}

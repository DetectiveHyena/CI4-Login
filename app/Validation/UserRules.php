<?php
namespace App\Validation;
use App\Models\Pagelogins;

class UserRules {

    public function validateUser(string $str, string $fields, array $data) {
        $model = new Pagelogins();
        $userz = $model->where('email', $data['email'])->first();

        if (!$userz)
               return false;
        

        return password_verify($data['password'], $userz['password']);
    }
}

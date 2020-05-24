<?php
namespace App\Validation;
use App\ModelS\Pagelogins;

/**
 *
 */
class UserRules {

    public function validateUser(string $str, string $fields, array $data) {
        $model = new Pagelogins();

        $user = $model->where('email', $data['email'])
            ->first();
        # code...

        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }
}

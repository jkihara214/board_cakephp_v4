<?php
namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher; // この行を追加
use Cake\ORM\Entity;

class User extends Entity
{
    // bake で生成されたコード

    // このメソッドを追加
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
<?php

class UserM {
    public function Registration($user, $email) {
        $i = PdoM::Instance()->Select("SELECT * FROM `users` WHERE email='$email'");
        if (isset($i[0]['email']) && $i[0]['email'] == $email){
            return false;
        }
        foreach ($user as $key => $value) {
            $columns[] = "`$key`";
            $values[] = "'$value'";
        }
        return PdoM::Instance()->Insert('users', $columns, $values);
    }

    public function getUser($email, $password) {
        $i = PdoM::Instance()->Select("SELECT * FROM `users` WHERE email='$email' AND password='$password'");
        return $i;
    }
}

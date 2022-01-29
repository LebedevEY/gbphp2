<?php

require_once 'PdoM.php';

class UserM {
    public function Registration($user, $email) {
        $i = PdoM::Instance()->Select("SELECT * FROM `users` WHERE email='$email'");
        if ($i[0]['email'] == $email){
            return false;
        }
        foreach ($user as $key => $value) {
            $columns[] = "`$key`";
            $values[] = "'$value'";
        }
        return PdoM::Instance()->Insert('users', $columns, $values);
    }
}

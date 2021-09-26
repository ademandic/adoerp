<?php
/**
 * Author: Adem Andiç
 * Login Model class extending Model
 */
class LoginModel extends Model
{
    public function loginDb($userinfo)
    {
        if(!$userinfo['username'] || !$userinfo['password'])
            return 0;

        extract($userinfo);
        $sqltext = "SELECT * FROM users WHERE username=? AND password=? AND status=?";
        $exec = $this->db->prepare($sqltext);
        $exec->execute([$username, $password, 2]);
        $result = $exec->fetchAll(PDO::FETCH_ASSOC);

        if(count($result) > 0)
        {
            $sqltext = "UPDATE users SET lastlogindate=? WHERE username=? AND password=? AND status=?";
            $exec = $this->db->prepare($sqltext);
            $exec->execute([date('Y-m-d H:i:s'), $username, $password, 2]);
        }

        return $result;
    }
}
?>
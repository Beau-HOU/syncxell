<?php
require_once "ModelInterface.php";
require_once "traitModel.php";
/**
 * @author Beaudelaire HOUNDO
 */
class BlogCategorie implements ModelInterface
{
    use traitModel;

    private const table_name = "grey_design_blog_categorie";

    public static function create(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::createModel($params);
    }

    public static function update(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::updateModel($params);
    }

    public static function delete(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::deleteModel($params);
    }

    public static function get(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::getModel($params);
    }

    public static function getAll(array $params)
    {
        $params["table_name"] = self::table_name;
        return self::getAllModel($params);
    }

    public static function strongPassword(string $password="")
    {

        $specialChar=['!','@','#', '$','%','^','&','*','(',')','_','-','+','=','<','>','?'];
        $verifySpecialChar=false;
        for($j=0;$j<strlen($password);$j++ ){
            if(in_array($password[$j],$specialChar ) ){
                $verifySpecialChar=true;
                break;
            }
           
        }
        if(!$verifySpecialChar)
        return [false,"
        Le mot de passe doit contenir au moins 4 caractères, au moins un 1 chiffre, au moins 1 lettre majuscule, au moins une lettre minuscule, et au moins un caractères spécial ('@','#', '!', '^' ) "];

       if(strlen($password) < 4 or !preg_match("#[0-9]+#", $password ) or !preg_match("#[A-Z]+#", $password ) or !preg_match("#[a-z]+#", $password ) ){
         return [false,"
         Le mot de passe doit contenir au moins 4 caractères, au moins un 1 chiffre, au moins 1 lettre majuscule, au moins une lettre minuscule, et au moins un caractères spécial ('@','#', '!', '^' )"];
       }
       return [true];
    }

    public static function authenticate(array $user,$remember = false)
    {
        $p = $user['user_password'];
        unset($user['user_password']);
        unset($user[3]);
        if(isset($user[$p])){
            unset($user[$p]);
        }
        $id=$user['user_id'];
        unset($user['user_id']);
        if(isset($user[$id])){
            unset($user[$id]);
        }
        $_SESSION['user'] = $user;
       
        //
        if($remember){
            if(isset($_COOKIE['u_slug'])){
                unset($_COOKIE['u_slug']);
            }
            self::remember($user['user_slug']);
        }
        return true;
    }

    private static function remember($slug){
        return setcookie(
            "u_slug",
            $slug,
            86400*30,
            "/",
            "www.amazpromo.com",
            true
        );
    }
    public static function loginWithCookie(){
        if(isset($_COOKIE['u_slug'])){
            return self::refresh($_COOKIE['u_slug']);
        }
        return false;
    }

    public static function refresh($slug){
        $user = self::get([
            "where"=>"user_slug=?",
            "execute"=>[$slug]
        ]);
        if(empty($user)){
            return false;
        }

        return self::authenticate($user);
    }

    public static function authUser(){
        if(isset($_SESSION["user"])){
            return true;
        }else{
            if(isset($_COOKIE['u_slug'])){
                $user4=User::get([
                   "where"=>"user_slug =?",
                   "execute"=>[$_COOKIE['u_slug']],
                ]);
                if(!$user4){
                    return false;
                }else{
                    $user=$user4;
                    $p = $user['user_password'];
                    unset($user['user_password']);
                    unset($user[3]);
                    if(isset($user[$p])){
                        unset($user[$p]);
                    }
                    $id=$user['user_id'];
                    unset($user['user_id']);
                    if(isset($user[$id])){
                        unset($user[$id]);
                    }
                    $_SESSION['user'] = $user;
                    
                    return true;
                }
            }
        }
        return false;
    }

    public static function isGranted(string $role){
        if(isset($_SESSION["role"])){
            return $_SESSION['role'] == $role;
        }
        return false;
    }

    public static function logout(){
        if(isset($_SESSION)){
            session_destroy();
        }
        // les cookies
        if(isset($_COOKIE['u_slug'])){
            unset($_COOKIE['u_slug']);
        }
    }
}

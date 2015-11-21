<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 19/07/2015
 * Time: 01:21 AM
 */

namespace App\Z;


class links {

    public function navBar(){
        return $links=
            [
                ["name"=>"incio","url"=>"/"],
                ["name"=>"nostros","url"=>"/nosotros"],
                ["name"=>"galleria","url"=>"/galleria"],
                ["name"=>"contacto","url"=>"/contacto"]
                ];
    }

}
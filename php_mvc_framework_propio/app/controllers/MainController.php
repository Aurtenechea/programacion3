<?php
class MainController
{
    public function index(){

        $user = User::find(2);

        /* response se puede usar porque desde el index fue
        incluida (y este archivo tamb).
        Al Response se le pueden pasar parametros que pueden ser usados en
        las vistas como variables del nombre de la clave. */
        Response::render('home', [
                                'name' => $user->name,
                                'age' => $user->age,
                                'email'=> $user->email
                            ]);

    }

    public function about(){
        echo "Hola desde el about";
    }
}

<?php

namespace app\controllers;

use app\database\Filters;
use app\database\models\User;


class HomeController extends Controller {

    public function index()
    {
        
        //$filters = new Filters;
        // $filters->where('id', '=', 88);
        //$filters->where('idcadastro', '>', 0);
        // $filters->order('id', 'desc');
        // $filters->limit(5);
        //$user = new User;
        // $user->setFields('id, nomecompleto, cpf');
        //$user->setFilters($filters);
        // $usersFound = $user->fetchAll();
        //$userFound = $user->findBy();
        //dd($userFound->nomecompleto);
        //$deleted = $user->delete();
        //$usuario = $user->first('id', 'asc');
        //$contagem = $user->count();
        //dd($contagem);

        $filters = new Filters;
        $filters->join(COLE_TABLE, USER_TABLE . '.idcolegiado', '=', COLE_TABLE . '.idcolegiado', 'left join');

        $user = new User;
        $user->setFields('idcadastro, nome, colegiado');
        $filters->where('idcadastro', '<', 6);
        $user->setFilters($filters);
        $userFound = $user->fetchAll();
        dd($userFound);

        $this->view('home',
        [
            'title'=>'Página principal'
        ]);
        
    }

}
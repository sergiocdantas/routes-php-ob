<?php

namespace app\controllers;

use app\core\Request;
use app\controllers\Controller;

class UserController extends Controller {

    public function edit($params)
    {
        
        $this->view(
            'user',
            [
                'name'=>'Sérgio Dantas',
                'title'=>'Página de estudantes'
        ]);
               
    }

    public function update($params)
    {
        
        $response = Request::only(['senha','nomecompleto']);
        dd($response);

    }

}
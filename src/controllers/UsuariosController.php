<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;


class UsuariosController extends Controller {

public function add(){
    $this->render('add');

    }

    public function addAction(){
                $name = filter_input(INPUT_POST,'name');
                $email = filter_input(INPUT_POST, 'email');
                

                if ($name && $email){
                    $data = Usuario::select()->where('email',$email)->execute();

                    if(count($data) === 0){
                        //insere
                        Usuario::insert([

                            'nome'=> $name,
                            'email'=> $email

                        ])->execute();
                        //redirect para /
                        $this->redirect('/');
                       echo "Cadastro realizado com sucesso";
                    }
                }
                //redirect para /novo
               // echo 'erro na pagina';
               $this->redirect('/novo');
    }

    public function update($args){

    $usuario = Usuario::select()->where('id',$args['id'])->one();
     $this->render('update',[
        'usuario'=> $usuario,
        
     ]);

    }

    public function updateAction($args){
        $name = filter_input(INPUT_POST,'name');
        $email = filter_input(INPUT_POST, 'email');
       

    if ($name && $email){
    Usuario::update()->set('nome',$name)->set('email',$email)->where('id',$args['id'])->execute();          
    $this->redirect('/');
    }

        $this->redirect('/usuario/'.$args['id'].'/update');
    }


    public function delete($args){  
        Usuario::delete()->where('id',$args['id'])->execute();
        $this->redirect('/');
    }


}

  
      
<?php

namespace app\controllers;

use app\models\Todos;

class TodosController extends \lithium\action\Controller
{

    public function index()
    {
        $todos = Todos::all();
        return compact('todos');
    }

    public function add()
    {
        # code...
    }

    public function edit()
    {
        $todo = Todos::find('first', [
            'conditions' => ['id' => $this->request->params['id']]
        ])->data();
        return compact('todo');
    }

    public function add_todo()
    {
        $todo = Todos::create($this->request->data);
        $success = $todo->save();
        if ($success) {
            $this->redirect('Todos::index');
        } else {
            echo 'Error in saving Todo';
        }
    }

    public function update_todo()
    {
        $todo = Todos::update(['title' => $this->request->data['title'], 'description' => $this->request->data['description']], ['id' => $this->request->data['id']]);
        if ($todo) {
            $this->redirect('Todos::index');
        } else {
            echo 'Error in updating Todo';
        }
    }

    public function show()
    {
        return $this->edit();
    }

    public function remove()
    {
        $success = Todos::remove(['id' => $this->request->params['id']]);
        if ($success) {
            $this->redirect('Todos::index');
        } else {
            echo 'Error in deleting Todo';
        }
    }
}

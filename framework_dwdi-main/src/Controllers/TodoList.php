<?php

// Pour décire lespace de nom, c'est pour différencier deux éléments avec les mm nom, deux classes avec le mm nom, pour charger le fichier de la classe, il sait pas ou c'est lol

namespace App\Controllers;

use App\Repository\TaskRepository;
use Framework\Controller;
use Framework\Response;

class TodoList extends Controller
{

    public function __construct(
        private TaskRepository $repository
    ) {}

    public function index(): Response
    {
        $tasks = $this->repository->findAll();
        return $this->view("TodoList/index.mvc.php", [
            "tasks" => $tasks,

        ]);
    }
}

<?php 

declare(strict_types=1);

namespace App\Repository;

use App\Models\Task;
use Framework\Repository;

class TaskRepository extends Repository
{

    // FIXME: Trouver un moyen pour que ce soit automatique
    protected string $associatedClass = Task::class;
    

    }


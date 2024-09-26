<?php
namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\DB;

class TaskService {

    protected $model;
    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    public function create($params)
    {
        try {
            $params['status'] = 1;
            //DB::table('tasks')->insert('name', $params);
            return $this->model->create($params);
        } catch (Exception $exception) {
            Log::error($exception);

            return false;
        }
    }

     public function update($task, $params)
    {
        try {
            $task->update($params);
            return $task;
        } catch (Exception $exception) {
            Log::error($exception);
            return false;
        }
    }
}

<?php

namespace App\Services;

use App\Repositories\TaskCommentRepository;

class TaskCommentService extends \App\Providers\AppServiceProvider
{
    protected $taskCommentRepository;

    public function __construct(TaskCommentRepository $taskCommentRepository)
    {
        $this->taskCommentRepository = $taskCommentRepository;
    }

    /**
     * @return mixed
     */
    public function all()
    {
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find($id)
    {
    }

    /**
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update($data, $id)
    {
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
    }
}
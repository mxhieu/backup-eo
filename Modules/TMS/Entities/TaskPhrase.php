<?php

namespace Modules\TMS\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskPhrase extends Model
{
    use SoftDeletes;

    protected $table = 'cfg_task_phrase';

    protected $fillable = ['name', 'remark', 'created_id', 'updated_id'];

    public function getAll(){
        return $this->orderBy('created_at')->get();
    }
}

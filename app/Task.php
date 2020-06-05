<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    public function project()
    {
       return $this->belongsTo(Project::class);
    }

    public function path()
    {
       return "/projects/{$this->project->id}/tasks/{$this->id}";
    }
}

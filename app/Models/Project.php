<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * Elements that are allowed be filled in directly
     *
     * @var string[]
     */
    protected $fillable = ['title', 'intro', 'description', 'active'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';
}

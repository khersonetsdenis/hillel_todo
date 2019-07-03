<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * @package App\Models
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property bool $is_done
 */
class Todo extends Model
{
    protected $casts = [
        'is_done' => 'boolean'
    ];

    protected $fillable = [
        'title', 'description', 'is_done'
    ];
}

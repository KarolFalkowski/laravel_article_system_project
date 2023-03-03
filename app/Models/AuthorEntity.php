<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorEntity extends Model
{
    public $timestamps = false;
    public const FIELD_AUTHOR_ID = 'author_id';
    public const FIELD_ENTITY_ID = 'entity_id';

    protected $table = 'author_entity';

    protected $fillable = [
        self::FIELD_AUTHOR_ID,
        self::FIELD_ENTITY_ID,
    ];
}

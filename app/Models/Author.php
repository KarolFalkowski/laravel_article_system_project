<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';

    protected $table = 'news_author';
    protected $primaryKey = self::FIELD_ID;

    protected $fillable = [
        self::FIELD_NAME,
    ];

    public function articles()
    {
        return $this->belongsToMany(Entity::class);
    }
}

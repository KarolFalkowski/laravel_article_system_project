<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    public $timestamps = false;
    public const FIELD_ID = 'id';
    public const FIELD_TITLE = 'title';
    public const FIELD_TEXT = 'text';
    public const FIELD_CREATION_DATE = 'creation_date';

    protected $table = 'news_entity';
    protected $primaryKey = self::FIELD_ID;
    protected $fillable = [
     self::FIELD_TITLE,
     self::FIELD_TEXT,
     self::FIELD_CREATION_DATE,
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}

<?php
//Это модель работы лишь с БД. Если нужно сделать бизнес логику не связанной с БД, то делаем новую модель и подключаем её
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
        'category_id',
        'author'
    ];

    public function getByNews()
    {
        return static::query() //query - это почти как SELECT * FROM news
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    public function getByCategoryId($id)
    {
        return static::query()
            ->where('category_id', $id)
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    public function getByNewsId($id)
    {
        return static::find($id);
    }

    public function createNews($value)
    {
        return $this
            ->fill($value)
            ->save();
    }

    public function updateNews($value)
    {
        return static::find($value['id'])
            ->fill($value)
            ->save();
    }

    public function deleteNews($value)
    {
        return static::find($value['id'])
            ->delete();
    }

    public function parsingNews($value)
    {
        if (!static::firstWhere('title', $value['title'])) {
            return $this
                ->fill($value)
                ->save();
        }
    }
}

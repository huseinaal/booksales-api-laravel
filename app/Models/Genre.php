<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Genre extends Model
{
    use HasFactory;
    public static function all($columns = ['*'])
    {
        return [
            ['id' => 1, 'name' => 'Fiksi Ilmiah'],
            ['id' => 2, 'name' => 'Fantasi'],
            ['id' => 3, 'name' => 'Misteri'],
            ['id' => 4, 'name' => 'Horor'],
            ['id' => 5, 'name' => 'Roman']
        ];
    }
}
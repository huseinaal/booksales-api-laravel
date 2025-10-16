<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Author extends Model
{
    use HasFactory;
    public static function all($columns = ['*'])
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling', 'country' => 'Inggris'],
            ['id' => 2, 'name' => 'Tere Liye', 'country' => 'Indonesia'],
            ['id' => 3, 'name' => 'Agatha Christie', 'country' => 'Inggris'],
            ['id' => 4, 'name' => 'Stephen King', 'country' => 'Amerika Serikat'],
            ['id' => 5, 'name' => 'Haruki Murakami', 'country' => 'Jepang']
        ];
    }
}
<?php
// Untuk memberi tahu laravel bahwa model Post ada disini >
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model //Laravel memetakan class Post ke sebuah Tabel Posts
{
    use HasFactory;
    //// protected $table = 'blog_posts';
    //bentuk jamak dari class Post menggunakan s dibelakang nya
    protected $fillable = ['title', 'author', 'slug', 'body'];

    //berguna untuk memanggil diphp artisan tinker untuk memanggil  $post = App\Models\Post::first() kemudian  $post -> author agar table users ikut terlihat karna tanpa belongsTo table user berisi name tidak dapat dilihat 
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

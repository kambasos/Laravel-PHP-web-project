<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*
class Product extends Model
{
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('ProductName');
        $table->decimal('Price', 10, 2);
        $table->text('ProductDescription')->nullable();
        $table->string('ImageURL')->nullable();
        $table->timestamps();
    });
}

}
*/

class Product extends Model
{
    protected $fillable = [
        'ProductName',
        'Price',
        'ProductDescription',
        'ImageURL',
    ];
}
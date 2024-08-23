<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function rules()
    {
        return [
            'name'         => ['required','min:3','max:200'],
            'description'  => ['required','max:2000'],
            'price'        => ['required','numeric','gt:0']
        ];


    }


}

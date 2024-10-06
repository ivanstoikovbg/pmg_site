<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    const CATEGORY_ACTIVITY = 'дейността на гимназията';
    const CATEGORY_SERVICES = 'Предоставяни обществени услуги';
    const CATEGORY_BUYER_PROFILE = 'Профил на купувача';
    const CATEGORY_SCHOLARSHIPS = 'Стипендии';
    const CATEGORY_BUDGET = 'Бюджет';
    const CATEGORY_CURRICULA = 'Учебни Планове';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'file_path',
        'category',
    ];
}
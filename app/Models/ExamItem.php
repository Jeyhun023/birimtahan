<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'exam_items';

    protected $fillable = [
        'exam_id',
        'title',
        'description',
        'file',
        'type',
        'correct_options',
        'relative_order',
    ];

    protected $casts = [
        'correct_options' => 'json'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
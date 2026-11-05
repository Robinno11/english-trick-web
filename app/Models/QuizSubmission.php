<?php

namespace App\Models;

use Database\Factories\QuizSubmissionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSubmission extends Model
{
    /** @use HasFactory<QuizSubmissionFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'whatsapp',
        'has_bimbel',
        'bimbel_duration',
        'branch',
        'email',
        'category',
        'total_questions',
        'correct_answers',
        'score',
        'cefr_level',
        'recommended_program',
        'answers',
        'skill_breakdown',
        'notes',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'total_questions' => 'integer',
            'correct_answers' => 'integer',
            'score' => 'integer',
            'answers' => 'array',
            'skill_breakdown' => 'array',
        ];
    }
}

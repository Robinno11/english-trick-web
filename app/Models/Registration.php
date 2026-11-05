<?php

namespace App\Models;

use Database\Factories\RegistrationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    /** @use HasFactory<RegistrationFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'whatsapp',
        'email',
        'program_id',
        'program_name',
        'learning_mode',
        'preferred_schedule',
        'message',
        'status',
    ];

    /**
     * @return BelongsTo<Program, Registration>
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}

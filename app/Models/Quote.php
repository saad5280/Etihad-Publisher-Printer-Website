<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'reference_number',
        'client_name',
        'institution_name',
        'email',
        'phone',
        'project_classification',
        'page_count',
        'desired_print_run',
        'inside_paper',
        'cover_finish',
        'cover_treatments',
        'binding_preference',
        'delivery_destination',
        'notes',
        'status',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'page_count' => 'integer',
            'desired_print_run' => 'integer',
            'cover_treatments' => 'array',
        ];
    }
}

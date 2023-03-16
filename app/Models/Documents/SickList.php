<?php
declare(strict_types=1);

namespace App\Models\Documents;

use App\Models\Subjects\Doctor;
use App\Models\Subjects\Patient;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $description
 * @property Carbon $created_date
 * @property Carbon $valid_until_date
 * @property Doctor $doctor
 * @property Patient $patient
 */
class SickList extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'description',
        'created_date',
        'valid_until_date'
    ];
    protected $casts = [
        'created_date' => 'datetime',
        'valid_until_date' => 'datetime',
    ];

    function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public $timestamps = true;
}

<?php
declare(strict_types=1);

namespace App\Models\Subjects;

use App\Models\Subjects\Organizations\ClinicOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $gps_coordinates
 * @property array $working_modes
 */
class Clinic extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'address',
        'phone',
        'email',
        'gps_coordinates',
        'working_modes'
    ];
    protected $casts = [
        'working_modes' => 'array',
    ];

    function cardByPatients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

    function doctors(): BelongsToMany
    {
        return $this->belongsToMany(Doctor::class);
    }
    function organization(): BelongsTo
    {
        return $this->belongsTo(ClinicOrganization::class);
    }


    public $timestamps = true;
}

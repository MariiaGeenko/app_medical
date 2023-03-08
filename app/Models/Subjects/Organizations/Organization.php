<?php
declare(strict_types=1);

namespace App\Models\Subjects\Organizations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $registration_number
 * @property Carbon $founding_date
 */
class Organization extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'description',
        'registration_number',
        'founding_date',
    ];
    protected $casts = [
        'founding_date' => 'datetime',
    ];
    public $timestamps = true;

}

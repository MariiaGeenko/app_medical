<?php
declare(strict_types=1);

namespace App\Models\Subjects\Organizations;

use App\Models\Subjects\Clinic;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property Clinic[] $clinics
 */
class ClinicOrganization extends Organization
{
    function clinics(): HasMany
    {
        return $this->hasMany(Clinic::class);
    }
}

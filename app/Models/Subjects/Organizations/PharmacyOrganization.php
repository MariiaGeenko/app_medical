<?php
declare(strict_types=1);

namespace App\Models\Subjects\Organizations;

use App\Models\Subjects\Pharmacy;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property Pharmacy[] $pharmacies
 */
class PharmacyOrganization extends Organization
{
    function pharmacies(): HasMany
    {
        return $this->hasMany(Pharmacy::class);
    }

}

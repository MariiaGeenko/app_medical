<?php
declare(strict_types=1);

namespace App\Models\Subjects\Organizations;

use App\Models\Subjects\Doctor;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EducationOrganization extends Organization
{
    function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
}

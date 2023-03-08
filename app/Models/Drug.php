<?php
declare(strict_types=1);

namespace App\Models;

use App\Models\Documents\Receipt;
use App\Models\Subjects\Pharmacy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id;
 * @property array $availability_pharmacies_ids
 * @property string $description_url
 * @property Receipt[] $receipts
 */
class Drug extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'description_url'
    ];

    function receipts(): HasMany
    {
        return $this->hasMany(Receipt::class);
    }
    function pharmacies(): BelongsToMany
    {
        return $this->belongsToMany(Pharmacy::class);
    }

    protected $casts = [
        'availability_pharmacies_ids' => 'array'
    ];
    public $timestamps = true;
}

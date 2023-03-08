<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $recipient_id
 * @property int $sender_id
 * @property string $message
 * @property boolean $sender_is_patient
 */
class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'recipient_id',
        'sender_id',
        'message',
        'sender_is_patient'
    ];
    public $timestamps = false;
}

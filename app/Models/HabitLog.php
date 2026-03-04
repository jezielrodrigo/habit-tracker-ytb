<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $habit_id
 * @property string $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Habit $habit
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\HabitLogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereHabitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|HabitLog whereUserId($value)
 * @mixin \Eloquent
 */
class HabitLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'habit_id',
        'completed_at'
    ];


    //um registro pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

   //um registro pertence a um habito
    public function habit(): BelongsTo
    {
        return $this->belongsTo(Habit::class);
    }

}

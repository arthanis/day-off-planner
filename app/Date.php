<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Date
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $date
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Date whereUpdatedAt($value)
 */
class Date extends Model
{
    /**
     * Fillable columns
     * @var array
     */
    protected $fillable = [
        'date', 'description'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Calendar
 *
 * @property int $id
 * @property string $giorno
 * @property int $oraInizio
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereGiorno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOraInizio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Course $corso
 * @property-read \App\Models\Course $course
 * @property-read mixed $giornosettimana
 */
class Calendar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getGiornosettimanaAttribute(){
        $giorno = '';
        switch ($this->giorno) {
            case 1:
                $giorno = 'Lunedì';
                break;
            case 2:
                $giorno = 'Martedì';
                break;
            case 3:
                $giorno = 'Mercoledì';
                break;
            case 4:
                $giorno = 'Giovedì';
                break;
            case 5:
                $giorno = 'Venerdì';
                break;
            case 6:
                $giorno = 'Sabato';
                break;
        }

        return $giorno;
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

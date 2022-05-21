<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\Concert
 *
 * @property int $id
 * @property string $title
 * @property string $concert_date
 * @property string $concert_start_time
 * @property string $city
 * @property string $address
 * @property string $artist
 * @property float $cost
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $concert_day
 * @property-read mixed $concert_houre
 * @property-read mixed $date_for_countdown
 * @property-read mixed $day_month
 * @property-read mixed $path
 * @property-read mixed $year
 * @method static \Illuminate\Database\Eloquent\Builder|Concert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Concert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Concert query()
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereArtist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereConcertDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereConcertStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concert whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Concert extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getConcertDayAttribute()
    {
        return Carbon::make($this->concert_date)->format('d/m/Y');
    }

    public function getDayMonthAttribute()
    {
        return Carbon::make($this->concert_date)->format('d M');
    }

    public function getYearAttribute()
    {
        return Carbon::make($this->concert_date)->year;
    }

    public function getConcertHoureAttribute()
    {
        return Str::substr($this->concert_start_time, 0, 5);
    }

    public function getPathAttribute()
    {
        return '/storage/concert/'.$this->id.'.jpg';
    }

    public function getDateForCountdownAttribute()
    {
        return Carbon::make($this->concert_date.' '.$this->concert_start_time)->format('d M Y H:m:s');
    }
}

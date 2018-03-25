<?php
namespace Xetaravel\Models;

use Illuminate\Support\Facades\Auth;
use Xetaravel\Models\Presenters\UserRubyPresenter;

class UserRuby extends Model
{
    use UserRubyPresenter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'obtainable_id',
        'obtainable_type'
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // Set the user id to the new log before saving it.
        static::creating(function ($model) {
            $model->user_id = Auth::id();
        });
    }

    /**
     * Get the user that owns the log.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the obtainable relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function obtainable()
    {
        return $this->morphTo();
    }
}

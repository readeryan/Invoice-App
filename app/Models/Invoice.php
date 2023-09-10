<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer_name',
        'total_transaction',
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}

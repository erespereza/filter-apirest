<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'postal_code',
    ];

    /**
     * Get all of the Invoice for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}

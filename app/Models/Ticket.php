<?php

// app/Models/Ticket.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'email', 'date', 'ticket_package', 'tickets', 'price', 'total_price'];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

}


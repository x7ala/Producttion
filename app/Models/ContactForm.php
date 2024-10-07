<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table = 'contact_us'; // Specify the table name
    protected $fillable = ['name', 'number', 'email', 'msg'];
}

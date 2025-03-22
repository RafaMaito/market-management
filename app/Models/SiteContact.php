<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteContact extends Model
{
    // Fillable fields for the model to allow mass assignment of data to the model.
    protected $fillable = ['name', 'phone', 'email', 'contact_reason', 'message'];

    // Use the SoftDeletes trait to mark a record as deleted instead of actually deleting it.
    use SoftDeletes;
}

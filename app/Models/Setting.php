<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    // Get raw value
    public static function get($key, $default = null)
    {
        $row = static::where('key', $key)->first();
        return $row ? $row->value : $default;
    }

    // Get JSON decoded value
    public static function getJson($key, $default = [])
    {
        $val = static::get($key, null);
        return $val ? json_decode($val, true) : $default;
    }

    // Set value (string or json encoded array)
    public static function set($key, $value)
    {
        if (is_array($value) || is_object($value)) {
            $value = json_encode($value);
        }
        return static::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
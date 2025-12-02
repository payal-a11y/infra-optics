<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        // Load individual keys (you can add more keys later)
        $settings = [
            // General
            'site_title' => Setting::get('site_title', 'My Site'),
            'tagline'    => Setting::get('tagline', ''),
            'logo'       => Setting::get('logo', ''),
            'favicon'    => Setting::get('favicon', ''),

            // Contact
            'contact_email' => Setting::get('contact_email', ''),
            'phone'         => Setting::get('phone', ''),
            'phone2'        => Setting::get('phone2', ''),
            'address'       => Setting::get('address', ''),
            'map_link'      => Setting::get('map_link', ''),
            'working_hours' => Setting::get('working_hours', ''),

            // Social
            'facebook'  => Setting::get('facebook', ''),
            'instagram' => Setting::get('instagram', ''),
            'linkedin'  => Setting::get('linkedin', ''),
            'youtube'   => Setting::get('youtube', ''),
            'whatsapp'  => Setting::get('whatsapp', ''),

            // SMTP
            'mail_mailer'   => Setting::get('mail_mailer', env('MAIL_MAILER', 'smtp')),
            'mail_host'     => Setting::get('mail_host', env('MAIL_HOST')),
            'mail_port'     => Setting::get('mail_port', env('MAIL_PORT')),
            'mail_username' => Setting::get('mail_username', env('MAIL_USERNAME')),
            'mail_password' => Setting::get('mail_password', env('MAIL_PASSWORD')),
            'mail_encryption' => Setting::get('mail_encryption', env('MAIL_ENCRYPTION')),
            'mail_from_address' => Setting::get('mail_from_address', env('MAIL_FROM_ADDRESS')),
            'mail_from_name' => Setting::get('mail_from_name', env('MAIL_FROM_NAME')),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:500',

            'logo' => 'nullable|image|max:2048',
            'favicon' => 'nullable|image|mimes:png,ico,ico,svg|max:1024',

            'contact_email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'phone2' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:1000',
            'map_link' => 'nullable|string|max:2000',
            'working_hours' => 'nullable|string|max:255',

            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'youtube' => 'nullable|url',
            'whatsapp' => 'nullable|string|max:50',

            'mail_mailer' => 'nullable|string',
            'mail_host' => 'nullable|string',
            'mail_port' => 'nullable|numeric',
            'mail_username' => 'nullable|string',
            'mail_password' => 'nullable|string',
            'mail_encryption' => 'nullable|string',
            'mail_from_address' => 'nullable|email',
            'mail_from_name' => 'nullable|string',
        ]);

        // Save simple text fields
        $textFields = [
            'site_title','tagline',
            'contact_email','phone','phone2','address','map_link','working_hours',
            'facebook','instagram','linkedin','youtube','whatsapp',
            'mail_mailer','mail_host','mail_port','mail_username','mail_password','mail_encryption','mail_from_address','mail_from_name'
        ];

        foreach ($textFields as $f) {
            if ($request->has($f)) {
                Setting::set($f, $request->input($f));
            }
        }

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = $file->store('settings', 'public');

            // delete old if exists
            $old = Setting::get('logo');
            if ($old && Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }

            Setting::set('logo', $path);
        }

        // Handle favicon upload
        if ($request->hasFile('favicon')) {
            $file = $request->file('favicon');
            $path = $file->store('settings', 'public');

            $old = Setting::get('favicon');
            if ($old && Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }

            Setting::set('favicon', $path);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
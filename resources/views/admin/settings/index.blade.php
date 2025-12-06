@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center flex gap-6 items-center">
        <h4 class=" text-2xl">Site Settings</h4>
        <button form="settingsForm" class="btn btn-success btn btn-primary mb-3 py-2 px-2 border-2 border-blue-950 bg-[#111827] text-white rounded-xl">Save Settings</button>

    </div>

    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form id="settingsForm" action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data " class="flex flex-col bg-white p-[40px] mt-[20px]">
            @csrf
            @method('PUT')

            <h5 class=" text-lg font-medium mb-3">General Settings</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="  text-base">Site Title</label>
                    <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-3/4" type="text" name="site_title" class="form-control" value="{{ old('site_title', $settings['site_title'] ?? '') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Tagline</label>
                    <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-3/4" type="text" name="tagline" class="form-control" value="{{ old('tagline', $settings['tagline'] ?? '') }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Logo <span class=" text-xs">(recommended: transparent PNG)</span></label><br>
                    @if(!empty($settings['logo']))
                        <img src="{{ asset('storage/' . $settings['logo']) }}" height="70" class="mb-2">
                    @endif
                    <input type="file" name="logo" class="form-control">
                    <small class="text-muted">Leave blank to keep existing logo.</small>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Favicon (png / svg / ico)</label><br>
                    @if(!empty($settings['favicon']))
                        <img src="{{ asset('storage/' . $settings['favicon']) }}" height="40" class="mb-2">
                    @endif
                    <input type="file" name="favicon" class="form-control">
                </div>
            </div>

            <hr>

            <h5 class=" text-lg font-medium mb-3">Contact Information</h5>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Contact Email</label>
                    <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="email" name="contact_email" class="form-control" value="{{ old('contact_email', $settings['contact_email'] ?? '') }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Phone</label>
                    <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="phone" class="form-control" value="{{ old('phone', $settings['phone'] ?? '') }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Secondary Phone</label>
                    <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="phone2" class="form-control" value="{{ old('phone2', $settings['phone2'] ?? '') }}">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Address</label>
                    <textarea class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" name="address" class="form-control" rows="2">{{ old('address', $settings['address'] ?? '') }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Google Map Link / Iframe</label>
                    <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="map_link" class="form-control" value="{{ old('map_link', $settings['map_link'] ?? '') }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Working Hours</label>
                    <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="working_hours" class="form-control" value="{{ old('working_hours', $settings['working_hours'] ?? '') }}">
                </div>
            </div>

            <hr>

            <h5 class=" text-lg font-medium mb-3">Social Media Links</h5>
            <div class="row">
                <div class="col-md-6 mb-3"><label>Facebook URL</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="url" name="facebook" class="form-control" value="{{ old('facebook', $settings['facebook'] ?? '') }}"></div>
                <div class="col-md-6 mb-3"><label>Instagram URL</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="url" name="instagram" class="form-control" value="{{ old('instagram', $settings['instagram'] ?? '') }}"></div>
                <div class="col-md-6 mb-3"><label>LinkedIn URL</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="url" name="linkedin" class="form-control" value="{{ old('linkedin', $settings['linkedin'] ?? '') }}"></div>
                <div class="col-md-6 mb-3"><label>YouTube URL</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="url" name="youtube" class="form-control" value="{{ old('youtube', $settings['youtube'] ?? '') }}"></div>
                <div class="col-md-6 mb-3"><label>WhatsApp Number</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="whatsapp" class="form-control" value="{{ old('whatsapp', $settings['whatsapp'] ?? '') }}"></div>
            </div>

            <hr>

            <h5 class=" text-lg font-medium mb-3">SMTP Settings</h5>
            <div class="row">
                <div class="col-md-4 mb-3"><label>Mail Driver</label> <input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="mail_mailer" class="form-control" value="{{ old('mail_mailer', $settings['mail_mailer'] ?? '') }}"></div>
                <div class="col-md-4 mb-3"><label>Mail Host</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="mail_host" class="form-control" value="{{ old('mail_host', $settings['mail_host'] ?? '') }}"></div>
                <div class="col-md-4 mb-3"><label>Mail Port</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="mail_port" class="form-control" value="{{ old('mail_port', $settings['mail_port'] ?? '') }}"></div>

                <div class="col-md-4 mb-3"><label>Mail Username</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="mail_username" class="form-control" value="{{ old('mail_username', $settings['mail_username'] ?? '') }}"></div>
                <div class="col-md-4 mb-3"><label>Mail Password</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3 " type="text" name="mail_password" class="form-control" value="{{ old('mail_password', $settings['mail_password'] ?? '') }}"></div>
                <div class="col-md-4 mb-3"><label>Encryption</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="mail_encryption" class="form-control" value="{{ old('mail_encryption', $settings['mail_encryption'] ?? '') }}"></div>

                <div class="col-md-6 mb-3"><label>From Email</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="email" name="mail_from_address" class="form-control" value="{{ old('mail_from_address', $settings['mail_from_address'] ?? '') }}"></div>
                <div class="col-md-6 mb-3"><label>From Name</label><input class="bg-sky-50 h-[30px] mb-[20px] px-2 w-2/3" type="text" name="mail_from_name" class="form-control" value="{{ old('mail_from_name', $settings['mail_from_name'] ?? '') }}"></div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success mb-3 py-2 px-2 border-2 border-blue-950 bg-[#111827] text-white rounded-xl">Save Settings</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary py-2 px-2 mb-3 w-12 bg-red-600  text-white rounded-xl">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
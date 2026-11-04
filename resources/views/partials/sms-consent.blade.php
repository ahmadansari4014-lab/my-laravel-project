{{--
    SMS consent checkbox. Must stay optional and unchecked by default
    (carrier / RingCentral TCR requirement). Pass $theme = 'dark' on dark forms.
--}}
@php($dark = ($theme ?? 'light') === 'dark')
<div class="flex items-start gap-3">
    <input
        type="checkbox"
        id="{{ $id ?? 'sms_consent' }}"
        name="sms_consent"
        value="1"
        {{ old('sms_consent') ? 'checked' : '' }}
        class="mt-1 h-4 w-4 flex-shrink-0 rounded {{ $dark ? 'border-slate-600 bg-slate-950 accent-cyan-400' : 'border-slate-300 accent-blue-600' }}"
    >
    <label for="{{ $id ?? 'sms_consent' }}" class="text-xs leading-relaxed {{ $dark ? 'text-slate-400' : 'text-slate-500' }}">
        {{ config('company.sms_consent_text') }}
        See our
        <a href="{{ route('privacy') }}" target="_blank" class="underline {{ $dark ? 'text-cyan-400' : 'text-blue-600' }}">Privacy Policy</a>
        and
        <a href="{{ route('sms-terms') }}" target="_blank" class="underline {{ $dark ? 'text-cyan-400' : 'text-blue-600' }}">SMS Terms</a>.
        (Optional)
    </label>
</div>

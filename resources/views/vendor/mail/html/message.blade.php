<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
{{ $getTheme['site_name'] }}
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ $getTheme['site_name'] }}. @lang('All rights reserved.')
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>

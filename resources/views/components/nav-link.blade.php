@php
    $curr = "text-blue-600 font-semibold border-b-2 border-blue-600 pb-1";
    $defulte = "text-gray-600 hover:text-blue-600 font-medium transition-colors";
@endphp
<a {{ $attributes }} class="{{$active ? $curr : $defulte }}" >
    {{ $slot }}
    
</a>
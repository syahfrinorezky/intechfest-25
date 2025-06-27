@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="{{ asset('images/logo/logo.png') }}" class="logo" alt="Intechfest">
                {{-- <span class="font-semibold">Intech</span>fest --}}
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>

@props([
    'svg' => '',
    'message' => '',
    'color' => 'gray'
])

<div class="relative inline-block">
    <x-icons.question/>
    <div
        class="absolute shadow right-full top-1/2 z-20 mr-3 -translate-y-1/2 translate-x-1 rounded whitespace-normal bg-{{ $color }}-100 py-[6px] px-4 text-sm font-semibold text-{{ $color }}-700 opacity-0 peer-hover:opacity-100">
        <span
            class="absolute right-[-3px] top-1/2 -z-10 h-2 w-2 -translate-y-1/2 rotate-45 rounded-sm bg-{{ $color }}-100">
        </span>
        {{ $message }}
    </div>
</div>
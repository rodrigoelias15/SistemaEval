@props([
    'svg' => '',
    'message' => '',
    'color' => 'gray'
])

<div class="relative inline-block">
    <x-icons.question :message="$message"/>
</div>
@props([
    'id' => '',
    'name' => '',
    'value' => ''
])

<div class="form-group form-check">
    <input class="form-check-input radio-input"
        type="radio"
        required onclick="exibeBarraProgressoInteratividade()"
        id= {{ $id }}
        name= {{ $name }}
        value= "{{ $value }}" >
    <label class="form-check-label" for="{{ $id }}">
        {{ $value }}
        {{ $slot }}
    </label>
</div>
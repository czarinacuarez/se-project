@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-whitefont-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-white font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>

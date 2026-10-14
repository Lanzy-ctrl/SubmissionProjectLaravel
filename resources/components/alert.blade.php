@props(['tipe' => 'info'])
<div {{ $attributes->merge(['style' => 'padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; background-color: #f8d7da; color: #721c24;']) }}>
    {{ $slot }}
</div>
@props(['tipe' => 'info'])

<div {{ $attributes->merge(['style' => 'padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; background-color: #f8d7da; color: #721c24;']) }}>
    {{ $slot }}
</div>
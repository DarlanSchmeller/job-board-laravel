@props(['type' => 'button', 'route' => null, 'padding' => 'px-8 py-4', 'rounded' => 'rounded-2xl'])

<a href="{{ $route }}">
    <button type={{ $type }}
        {{ $attributes->merge([
            'class' => "w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white $rounded font-medium transition-colors
                    duration-200 cursor-pointer $padding",
        ]) }}>
        {{ $slot }}
    </button>
</a>

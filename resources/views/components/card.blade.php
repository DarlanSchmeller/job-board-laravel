<div {{ $attributes->merge([
    'class' => '
        rounded-xl 
        bg-white 
        p-6 
        hover:shadow-md 
        transition-shadow 
        duration-200
    '
]) }}>
    {{ $slot }}
</div>

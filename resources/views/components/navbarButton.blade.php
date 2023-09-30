<div {{ $attributes->merge(['class' => 'p-3 hover:bg-gray-200 active:bg-gray-400 active:ring active:ring-black']) }}>
    <a href="{{ $route }}" class="flex flex-col items-center">
        {{ $slot }}
        <h2>{{ $title }}</h2>
    </a>
</div>
<li {{ $attributes->class([
        'py-2 px-3 text-skin-base focus:outline-none transition-colors ease-in-out duration-50 relative group',
        'cursor-pointer focus:bg-green-100 focus:text-green-800' => !($readonly || $disabled),
        'opacity-60 cursor-not-allowed' => $disabled
    ])->merge([
        'data-label' => $label,
        'data-value' => $value,
    ]) }}
    @unless($readonly || $disabled)
        tabindex="0"
        x-on:click="select('{{ $value }}')"
        x-on:keydown.enter="select('{{ $value }}')"
    @endunless
    :class="{
        'font-semibold': isSelected('{{ $value }}'),
        @if (!($readonly || $disabled))
            'hover:bg-negative-500': isSelected('{{ $value }}'),
            'hover:bg-primary-500': !isSelected('{{ $value }}'),
        @endif
    }">
    {!! $label ?? $slot !!}

    <div class="absolute inset-y-0 right-0 flex items-center pr-4"
        x-show="isSelected('{{ $value }}')">
        <x-dynamic-component
            :component="WireUi::component('icon')"
            name="check"
            class="w-5 h-5 text-primary-600 dark:text-secondary-500 group-hover:text-white"
        />
    </div>
</li>

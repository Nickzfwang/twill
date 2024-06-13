<div class="prose">
    <h2>{{ $block->translatedInput('title') }}</h2>
    {!! $block->translatedInput('text') !!}
</div>

<div class="py-8 mx-auto max-w-2xl flex items-center">
    <img src="{{ $block->image('highlight', 'desktop') }}"/>
</div>
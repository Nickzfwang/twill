@extends('site.layouts.news')

@section('content')
    @if ($article)
        <ul>
            <li>
                {{ $article->title }}
                {{ $article->description }}
            </li>
        </ul>
    @else
        <p>{{ __('news.no_news') }}</p>
    @endif
@endsection
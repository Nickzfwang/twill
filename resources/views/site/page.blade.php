<!doctype html>
<html lang="en">
<head>
    <title>Demo page</title>
</head>
<body>
<x-menu/>
<div>
    {{ $item->title }}
    <br />
    {{ $item->description }}
    <div class="mx-auto max-w-2xl">
        {!! $item->renderBlocks() !!}
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    @include('components.head')
</head>
<body @unless(empty($body_classes)) class="{{ $body_classes }}" @endunless>
@yield('content')

@include('components.scripts')
</body>
</html>

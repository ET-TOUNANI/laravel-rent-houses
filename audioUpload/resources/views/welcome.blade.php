<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased bg-gray-200 text-gray-900 font-sans p-6">
    @include('./layouts/nav')
    @include('./layouts/main')
    @include('./layouts/footer')
    {{-- @include('./layouts/form') --}}
</body>
</html>
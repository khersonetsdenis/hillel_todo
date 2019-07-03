<meta charset="utf-8">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Todo app</title>

<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="{{ asset('js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Translation</title>
</head>
<body>
    <h1>Translation Test</h1>
    
    <p><strong>Current Locale:</strong> {{ app()->getLocale() }}</p>
    <p><strong>Session Locale:</strong> {{ session('locale', 'not-set') }}</p>
    
    <h2>Testing Translations:</h2>
    <ul>
        <li>messages.services: {{ __('messages.services') }}</li>
        <li>messages.company: {{ __('messages.company') }}</li>
        <li>messages.about_us: {{ __('messages.about_us') }}</li>
    </ul>
    
    <h2>Direct Key Test:</h2>
    <ul>
        <li>services: {{ __('services') }}</li>
        <li>company: {{ __('company') }}</li>
        <li>about_us: {{ __('about_us') }}</li>
    </ul>
    
    <h2>Lang Function Test:</h2>
    <ul>
        <li>Lang messages.services: {{ Lang::get('messages.services') }}</li>
        <li>Trans messages.services: {{ trans('messages.services') }}</li>
    </ul>
</body>
</html>
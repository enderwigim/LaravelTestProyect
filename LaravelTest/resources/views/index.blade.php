<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <livewire:components.navbar>

    <livewire:customers.customer-grid />
    <livewire:customers.detail />
    @livewireScripts
</body>
</html>

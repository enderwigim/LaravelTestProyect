<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <livewire:components.navbar>

    <livewire:customers.customer-grid />
    <livewire:customers.detail />
    <livewire:customers.customer-edit />
    @livewireScripts
    @stack('modals')
</body>
</html>

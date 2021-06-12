<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LiveWire</title>
    @livewireStyles
</head>
<body>
    
    <h1>Este es mi primer componente livewire</h1>
    @livewire('hello-world')
    <hr/>

    <h1>Este es mi segundo componente LiveWire</h1>
    <!-- Podemos pasar datos/parametros a un componente livewire cuando es llamado, estos datos seran recogidos dentro del metodo mount() -->

    @livewire('project', ['name' => 'Livewire'])

    <h1>Este componente livewire esta trabajando con Eloquent</h1>
    @livewire('user-hello')

    <h3>Este componente padre Livewire esta usando eventos para hacer comunicaciones entre distintos componentes hijos</h3>
    @livewire('new-contact')

    @livewireScripts
</body>
</html>

<table {{ $attributes->class(['table table-bordered']) }} >

    <thead>
        <x-table.row>
            {{ $heading }}
        </x-table.row>
    </thead>

    <tbody>
        {{ $slot }}
    </tbody>

</table>

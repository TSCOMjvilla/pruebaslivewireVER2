<div>

    <div class="px6 py-4">
        <input type="text" wire:model='search' placeholder="buscar...">
    </div>
    @if ($posts->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><button type="button" class="btn" wire:click="order('id')" >ID</button></th>
                    <th><button type="button" class="btn" wire:click="order('title')">Titulo</button></th>
                    <th><button type="button" class="btn" wire:click="order('content')">Comentario</button></th>
                    <th><button type="button" class="btn">Acciones</button></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>edit</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <div class="px6 py-4">
            No existe ningun registro coincidente
        </div>
    @endif
</div>

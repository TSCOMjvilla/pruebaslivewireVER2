<div>

    <div class="container align-baseline">
        <div class="row">
          <div class="col">
            <div>
                <input class="flex" type="text" wire:model='search' placeholder="buscar...">
            </div>
          </div>
          <div class="col">
            
          </div>
          <div class="col-2">
            @livewire('create-post')
          </div>
        </div>
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
                        <td>@livewire('edit-post',['post'=>$post],key($post->id))</td>
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

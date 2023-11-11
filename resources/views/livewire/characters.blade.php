<div class="container mt-5">
    <h2>Карточки персонажей</h2>
    <div class="row">
        @if(@$this->characters[0])
            @foreach($characters as $key => $character)
            <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{asset('images/characters/character_template.jpg')}}" class="card-img-top" alt="Character Image">
                        <div class="card-body">
                            <h5 class="card-title">{{$character->name}}</h5>
                            <a href="/characters/{{$character->id}}" class="btn btn-primary">Перейти</a>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete" wire:click="deleteCharacter({{$character->id}}, {{$key}})">Удалить</button>
                        </div>
                    </div>
            </div>
            @endforeach
        @else
            <p>У вас нет ни одного персонажа. <a href="/character_create">Создать</a></p>
        @endif
        <!-- Repeat this card structure for each character -->
    </div>
</div>

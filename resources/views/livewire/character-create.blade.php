<div class="container mt-5">
    <h2>Заполните информацию о персонаже</h2>
    <form wire:submit.prevent="createCharacter">
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" placeholder="Введите имя" wire:model="name">
        </div>
        <div class="form-group">
            <label for="age">Возраст:</label>
            <input type="number" class="form-control" id="age" placeholder="Введите возраст" wire:model="age">
        </div>
        <div class="form-group">
            <label for="race">Раса:</label>
            <select class="form-control" id="race" wire:change="getSubRace" wire:model="race">
                <option value="">Выбрать</option>
                @foreach($races as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>
        @if(@is_array($subRace) && !empty($subRace))
        <div class="form-group">
            <label for="subrace">Подраса:</label>
            <select class="form-control" wire:model="sub_race">
                <option value="">Выбрать</option>
                @foreach($subRace as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>
        @endif
        <div class="form-group">
            <label for="level">Уровень:</label>
            <input type="number" class="form-control" id="level" value="1" wire:model="level">
        </div>
        <div class="form-group">
            <label for="experience">Опыт:</label>
            <input type="text" class="form-control" id="experience" value="0" wire:model="current_exp">
        </div>
        <div class="form-group">
            <label for="experience">Опыт на уровень:</label>
            <input type="text" class="form-control" id="exp_to_level" value="10" wire:model="exp_to_level">
        </div>
        <div class="form-group">
            <label for="traits">Черты:</label>
            <textarea class="form-control" id="traits" rows="5" placeholder="Что персонаж любит, чего боится, и т.д." wire:model="traits"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    @if($response)
    <p>Персонаж {{ $name }} был успешно создан</p>
    @endif
</div>

<div class="container-fluid">
    <div class="row">
        @foreach($dicesInfo as $key => $diceInfo)
        <div class="input-group mb-3">
            <button class="btn btn-outline-danger" wire:click="deleteDice({{ $key }})" type="button" id="button-addon2">delete</button>
            <input class="form-control" wire:keydown.debounce.50ms="updateDice({{$key}}, 'count', 32)" type="number" placeholder="Default input" aria-label="count" value="{{ $dicesInfo[$key]['count'] }}">
            <span class="input-group-text">d</span>
            <input class="form-control" type="number" placeholder="Default input" aria-label="count" value="{{ $diceInfo['rank'] }}">
            <span class="input-group-text">mod</span>
            <input class="form-control" type="number" placeholder="Default input" aria-label="count" value="{{ $diceInfo['mod'] }}">
            <select class="input-group-text">
                <option value="each" <?= $diceInfo['countType'] == 'each' ? 'selected' : '' ?> >each</option>
                <option value="summ" <?= $diceInfo['countType'] == 'summ' ? 'selected' : '' ?> >summ</option>
            </select>
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Roll</button>
        </div>
        @endforeach
        <button class="btn btn-outline-primary" wire:click="addDice" type="button" id="button-addon2">add</button>
    </div>
</div>

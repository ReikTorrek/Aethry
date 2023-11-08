<div class="container-fluid">
    <input type="number" wire:model="mod" placeholder="Модификатор">
    <button wire:click="clearAll" style="color: red">clear</button>
    <div class="row">
        @foreach($diceRanks as $key => $diceRank)
            <div class="col">
                <div class="row-cols-md-1" wire:click="rollDice({{ $key }})" style="cursor: pointer; user-select: none">
                    <h2>{{ $diceRank }}</h2>
                    @if(@is_array($history[$diceRank]))
                        <div class="row-cols-md-1 border">
                        @foreach($history[$diceRank] as $key1 => $value)
                                <h3>{{ $value }}</h3>
                        @endforeach
                        </div>
                        <div class="row-cols-md-1 mt-5 border">
                            <h3 style="color: red">Res: {{ $value }} + {{$mod}} = {{ $value + $mod }}</h3>
                        </div>
                        <div class="row-cols-md-1 mt-5 border">
                            <h3 style="color: green">Sum: {{ array_sum($history[$diceRank]) }}</h3>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

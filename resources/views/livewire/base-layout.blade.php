<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 block" wire:click="redirectUser('/rules')">
            <h2>Читать правила</h2>
        </div>
        @if($isAuthed)
            <div class="col-md-6 block" wire:click="redirectUser('/characters')">
                <h2>Персонажи</h2>
            </div>
        @else
            <div class="col-md-6 block" wire:click="redirectUser('/register')">
                <h2>Начать приключение</h2>
            </div>
        @endif
        <div class="col-md-6 block" wire:click="redirectUser('/dice')">
            <h2>Dice roller</h2>
        </div>
        <div class="col-md-6 block" wire:click="redirectUser('/contacts')">
            <h2>Контакты</h2>
        </div>
    </div>
</div>

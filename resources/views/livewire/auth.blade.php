<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mt-5 mb-3">Авторизация</h2>
            <form wire:submit.prevent="login">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" wire:model="email" class="form-control" id="email" placeholder="Введите email" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" wire:model="password" class="form-control" id="password" placeholder="Введите пароль" required>
                </div>
                <button type="submit" class="btn btn-primary">Авторизоваться</button>
            </form>
            <p>{{ $response }}</p>
        </div>
    </div>
</div>

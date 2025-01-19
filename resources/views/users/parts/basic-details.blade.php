<div class="card">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    </form>
    <div class="card-header">
        Dados básicos
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value={{ old('name') ?? $user->name }}>

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') ?? $user->email }}">

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

    </div>


    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</div>

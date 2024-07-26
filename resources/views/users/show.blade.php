<x-Layouts.App>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">Volver</a>
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="mt-4">
                                <label for="">Nombres</label>
                                <input type="text" value="{{ $user->name }}" class="form-control" name="name" disabled>
                            </div>
                            <div class="mt-4">
                                <label for="">Correo</label>
                                <input type="email" value="{{ $user->email }}" class="form-control" name="email" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-Layouts.App>

<x-Layouts.App>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <x-Layouts.Partials.Alert/>
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Crear nuevo usuario</a>
                        <div class="table-responsive mt-2">
                            <table class="table table-striped table-sm table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRES</th>
                                    <th>CORREO</th>
                                    <th>FECHA</th>
                                    <th>ACCIONES</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                  <tr>
                                      <td>{{ $user->id }}</td>
                                      <td>{{ $user->name }}</td>
                                      <td>{{ $user->email }}</td>
                                      <td>{{ $user->created_at }}</td>
                                      <td>
                                          <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <a  class="btn btn-sm btn-primary" href="{{ route('users.show', $user->id) }}">Detalles</a>
                                              <a class="btn btn-sm btn-warning" href="{{ route('users.edit', $user->id) }}">Editar</a>
                                              <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                          </form>
                                      </td>
                                  </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-Layouts.App>

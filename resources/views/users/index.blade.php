<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="padding: 15px;" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="row py-2">


                    <div class="col-md-6">
                        <div class="form-group">
                            <form method="get" action="/search" name="index">
                                <div class="input-group">
                                    <input class="form-controll" name="users" placeholder="Search...">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="group">
                    <div class="group_header">
                      <h3>Список пользователей</h3>
                    </div>
                    <div class="group_table">


                  <table class="table">
                  <thead>
                    <tr>
                      <th class="redat1" scope="col">#</th>
                      <th class="redat2" scope="col">Название</th>
                      <th class="redat2" scope="col">Почта</th>


                    </tr>
                  </thead>
                  <tbody>

                    @foreach($users as $user)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>


                        </form>
                    </tr>

                    @endforeach
                  </tbody>
                </table>

                </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>

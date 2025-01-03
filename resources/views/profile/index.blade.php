@extends('layouts.template')
@section('content')

    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
        data-keyboard="false" data-width="75%" aria-hidden="true"></div>
    <div class="container rounded bg-white border">
        <div class="row" id="profile">
            <div class="col-md-4 border-right">
                <div class="p-3 py-5">
                    dd(session('user_id'))
                    <div class="d-flex flex-column align-items-center text-center p-3 ">
                    @if ($user->foto)
                        <img class="rounded-circle" width="250px" src=" {{ asset($user->foto) }} " alt="Foto profile">
                    @else
                        <img class="rounded-circle" width="250px" src=" {{ asset('no-image.jpg') }} " alt="Foto profile">
                    @endif
                    </div>
                    <div onclick="modalAction('{{ url('/profile/' . session('user_id') . '/edit_foto') }}')"
                        class="mt-4 text-center"><button class="btn btn-primary profile-button" type="button">Edit
                            Foto</button></div>
                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-4">
                    <div class="d-flex align-items-center">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <tr>
                                <th>ID</th>
                                <td>{{ $user->user_id }}</td>
                            </tr>
                            <tr>
                                <th>Level</th>
                                <td>{{ $user->level->level_nama }}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $user->nama }}</td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td>********</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3 text-center">
                        <button onclick="modalAction('{{ url('/profile/' . session('user_id') . '/edit_ajax') }}')"
                            class="btn btn-primary profile-button">Edit
                            Profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }
    </script>
@endpush
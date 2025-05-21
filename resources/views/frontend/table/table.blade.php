@extends('frontend.layouts.main')

@section('main-container')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <div class="text-success">
                        {{ session()->get('success') }}
                    </div>
                    <p class="card-description">
                        Add class <code>.table</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>country</th>
                                    <th>Created_at </th>
                                    <th>Updated_at </th>
                                    <th class ="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }} </td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td><button type="button" class=" btn btn-light" id="edit" name="edit "><a
                                                    href="{{ route('edit.user', $user->id) }} class="link-primary">Edit</a></button>&nbsp;&nbsp;
                                            <button type="button" class=" btn btn-light" id="delete" name="delete"
                                                onclick="return confirm('are your sure you want to delete this user?')"><a
                                                    href="{{ route('deleteuser', $user->id) }} class="link-primary">Delete</a></button>&nbsp;&nbsp;

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endsection

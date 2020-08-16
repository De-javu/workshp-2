@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                       <table class="table">
                           <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>last Name</th>
                                  <th>Email Name</th>
                              </tr>
                           </thead>
                           <tbody>
                             @foreach($users as $user)
                               <tr>
                                   <td>{{ $user->first_name }}</td>
                                   <td>{{ $user->last_name }}</td>
                                   <td>{{ $user->email }}</td>
                               </tr>
                             @endforeach
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

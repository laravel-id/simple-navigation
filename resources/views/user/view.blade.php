@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                    <div class="tabel-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Name</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Created</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                @if (! empty($prev))
                    <a href="{{ route('user.view', [$prev->username]) }}" class="btn btn-default pull-left">
                        Prev: {{ $prev->name }}
                    </a>
                @endif

                @if (! empty($next))
                    <a href="{{ route('user.view', [$next->username]) }}" class="btn btn-default pull-right">
                        Next: {{ $next->name }}
                    </a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

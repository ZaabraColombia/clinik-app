@extends('tenant.layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/DataTables/css/jquery.dataTables.min.css') }}"/>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <nav aria-label="breadcrumb" class="agenda_path">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.manager.users.index') }}">{{ __('trans.users') }}</a>
                </li>
                {{--<li class="breadcrumb-item"><a href="{{ route('tenant.manager.users.create') }}">{ __('trans.add-users') }}</a></li>--}}
            </ol>
        </nav>
    </nav>

    <div class="agenda_row my-3">
        <h1 class="title_list">{{ __('trans.users') }}<i class="fas fa-users pl-2"></i></h1>

        <a href="{{ route('tenant.manager.users.create') }}" class="button_primary m-0">{{ __('trans.add-users') }} <!-- Botón superior -->
            <i class="fas fa-user-plus pl-2"></i>
        </a>
    </div>

    <table id="patients-table" class="display nowrap table_agenda my-3" style="width:100%">
        <thead>
        <tr>
            <th>{{ __('trans.name') }}</th>
            <th>{{ __('trans.id_card') }}</th>
            <th>{{ __('trans.email') }}</th>
            <th>{{ __('trans.roles') }}</th>
            <th>{{ __('trans.status') }}</th>
            <th>{{ __('trans.action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ "$user->name $user->last_name" }}</td>
                <td>{{ $user->id_card }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(isset($user->roles))
                        @foreach($user->roles as $role)
                            <span class="badge badge-pill badge-info">{{ __('trans.' . \Illuminate\Support\Str::slug($role->name)) }}</span>
                        @endforeach
                    @endif
                </td>
                <td>
                    <span class="{{ ($user->status) ? 'status_active' : 'status_unactive' }}">
                        {{ ($user->status) ? __('trans.active') : __('trans.inactive') }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('tenant.manager.users.edit', ['user' => $user->id]) }}" data-toggle="tooltip" data-container=".tooltip-danger"
                       title="Edit user" class="action_table">
                        <i class="fas fa-user-edit"></i> {{ __('trans.edit') }}
                    </a>
                    <a href="{{ route('tenant.manager.users.roles', ['id' => $user->id]) }}" data-toggle="tooltip" data-container=".tooltip-danger"
                       title="Edit user" class="action_table">
                        <i class="fas fa-user-tag"></i> Roles
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugin/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#patients-table').DataTable( {
                responsive: true
            } );
        } );
    </script>
@endsection

@extends('tenant.layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugin/DataTables/css/jquery.dataTables.min.css') }}"/>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <nav aria-label="breadcrumb" class="agenda_path">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('tenant.manager.history-medical-variables.index') }}">
                        {{ __('manager.variable') }}
                    </a>
                </li>
                {{--                <li class="breadcrumb-item"><a href="{{ route('tenant.manager.history-medical-variables.create', ['type' => $variableType->id]) }}">{{ __('manager.add-variable') }} - {{ __('manager.' . $variableType->name) }}</a></li>--}}
            </ol>
        </nav>
    </nav>

    <div class="agenda_row my-3">
        <h1 class="title_list">{{ __('manager.variable') }}&nbsp;<i class="fas fa-file-signature"></i></h1>
{{--        <a href="{{ route('tenant.manager.history-medical-variables.create') }}" class="button_primary">--}}
{{--            {{ __('manager.add-variable') }}&nbsp;<i class="fas fa-plus"></i>--}}
{{--        </a>--}}
        <div class="btn-group dropleft">
            <button class="button_primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                {{ __('manager.add-variable') }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($variableTypes as $variableType)
                    <a class="dropdown-item"
                       href="{{ route('tenant.manager.history-medical-variables.create', ['type' => $variableType->id]) }}">
                        {{ __('manager.' . $variableType->name) }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <table id="patients-table" class="display nowrap table_agenda my-3" style="width:100%">
        <thead>
            <tr>
                <th>{{ __('trans.name') }}</th>
                <th>{{ __('manager.category') }}</th>
                <th>{{ __('trans.status') }}</th>
                <th>{{ __('trans.action') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($variables as $variable)
            <tr>
                <td>{{ $variable->name }}</td>
                <td>{{ $variable->history_medical_category->name }}</td>
                <td>
                    <span class="{{ ($variable->status) ? 'status_active' : 'status_unactive' }}">
                        {{ ($variable->status) ? __('trans.active') : __('trans.inactive') }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('tenant.manager.history-medical-variables.edit', ['variable' => $variable->id]) }}" class="action_table">
                        <i class="fas fa-user-edit"></i> {{ __('trans.edit') }}
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

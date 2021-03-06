@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Tendik' => route('backend.staffs.index'),
        'Edit' => '#'
    ]) !!}
@endsection

@section('toolbar')
    @can('staffs_manage')
    {!! cui()->toolbar_btn(route('backend.staffs.index'), 'cil-list', 'List Tendik') !!}
    @endcan
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        {{ html()->form('POST', route('backend.staffs.store'))->acceptsFiles()->open() }}

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-library-add"></i> Tambah Tendik</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('backends.staffs._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                        </div>

                        {{ html()->form()->close() }}

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@extends('...master')

@section('content')

    <div class="col-md-12">
        <table class="table table-striped table-responsive table-hover">
            <thead>
            <tr>
                <th>Transformer name</th><th>City Location</th><th>Model Number</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transformers as $transformer)
                <tr>
                    <td>{!!link_to_route('details',$transformer->transformer,[$transformer->slug])!!}</td>
                    <td>{!! $transformer->city_location !!}</td>
                    <td>{!! $transformer->model_number !!}</td>
                </tr>
            @endforeach
            <tr>
                <td>
                    {!! Form::open(['url'=>'/details/add']) !!}
                    {!! Form::text('slug',null, ['class'=>'form-control', 'placeholder'=>'Enter slug for the new transformer']) !!}
                    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </td>
                <td colspan="2"></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop

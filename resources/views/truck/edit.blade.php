@extends('layouts.app')
@section('content')
    <div class="content container-fluid">
        <form action="{{ route('truck.update',compact('truck')) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="registered">n° d'imatrucle</label>
                            <input type="text" name="registered" id="registered"
                                   value="{{ (old('registered')) ?? $truck->registered }}"
                                   placeholder="n° d'imatrucle" class="form-control">
                            @if($errors->has('registered'))
                                <span class="text-danger">{{ $errors->first('registered') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="transporter">Transport</label>
                            <select name="transporter" id="transporter" class="form-control">
                                <option value="0"
                                        @if(old('transporter') == '0')
                                        selected
                                        @elseif($truck->transporter)
                                        selected
                                        @endif
                                >Distributeur
                                </option>
                                <option value="1"
                                        @if(old('transporter') == '1')
                                        selected
                                        @elseif($truck->transporter)
                                        selected
                                        @endif>Transporteur
                                </option>
                            </select>
                            @if($errors->has('transporter'))
                                <span class="text-danger">{{ $errors->first('transporter') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="assistant">Assistant : </label>
                            <select name="assistant" id="assistant" class="form-control">
                                @foreach($assistants as $assistant)
                                    <option value="{{ $assistant->id }}"
                                    @if(($current_assistant) && $current_assistant->assistant_id == $assistant->id)
                                        selected
                                            @endif
                                    >{{ $assistant->full_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('assistant'))
                                <span class="text-danger">{{ $errors->first('assistant') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="driver">Driver : </label>
                            <select name="driver" id="driver" class="form-control">
                                @foreach($drivers as $driver)
                                    <option value="{{ $driver->id }}"
                                            @if(($current_driver) && $current_driver->driver_id == $driver->id)
                                            selected
                                            @endif
                                    >{{ $driver->full_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('driver'))
                                <span class="text-danger">{{ $errors->first('driver') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="assurance">Date d'expiration Assurance :</label>
                            <input type="date" name="assurance" id="assurance" value="{{ (old('assurance')) ?? $truck->assurance }}" placeholder="Date d'expiration Assurance :" class="form-control">
                            @if($errors->has('assurance'))
                                <span class="text-danger">{{ $errors->first('assurance') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="visit_technique">visite technique :</label>
                            <input type="date" name="visit_technique" id="visit_technique" value="{{ (old('visit_technique')) ?? $truck->visit_technique }}" placeholder="visite technique :" class="form-control">
                            @if($errors->has('visit_technique'))
                                <span class="text-danger">{{ $errors->first('visit_technique') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 offset-6 text-right">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
@extends('layouts.app')

@section('content')

<div id="InfoSinistre" class="section db">
    <div class="container-fluid">
        <div class="section-title text-center">
            <h3>Information du Sinistre</h3>
            <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form action="#" method="POST" novalidate>
                         @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="type" name="type" type="text" placeholder="Type" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('type','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="lieu" name="lieu" type="text" placeholder="Lieu" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('lieu','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="date" name="date" type="date" placeholder="Date" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('date','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="heure" name="heure" type="time" placeholder="Heure" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('heure','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="NombrePersonne" name="NombrePersonne" type="text" placeholder="Nombre de personne" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('NombrePersonne','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="photo" name="Photo" type="photo" placeholder="Photo" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('Photo','<span class="help-block">:message </span>')!!}
                                </div>
                            </div> --}}

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="description" type="message" name="description" placeholder="Description" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('description','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="sim-btn hvr-rectangle-out" data-text="Send Message" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->












  @endsection


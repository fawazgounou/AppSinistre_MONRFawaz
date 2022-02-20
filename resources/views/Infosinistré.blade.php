@extends('layouts.app')

@section('content')

<div id="Infosinistré" class="section db">
    <div class="container-fluid">
        <div class="section-title text-center">
            <h3>Information du Sinistré</h3>
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
                                <div class="form-group" >
                                    <input class="form-control" id="age" name="age" type="numerique" placeholder="Age" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('age','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="profession" name="profession" type="text" placeholder="Profession" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('profession','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="nom" name="nom" type="text" placeholder="Nom " required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('nom','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="prenom" name="prenom" type="text" placeholder="Prenom" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('prenom','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-lg-12 text-center" >
                                <div class="form-group">
                                    <input class="form-control" id="Protection" name="protection" type="text" placeholder="Protection choisis" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('protection','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="photo" name="photo" type="text" placeholder="Photo de la facture" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('photo','<span class="help-block">:message </span>')!!}
                                </div>
                            </div> --}}
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










<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- Camera Slider -->
<script src="js/jquery.mobile.customized.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/parallaxie.js"></script>
<script src="js/headline.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>


  @endsection


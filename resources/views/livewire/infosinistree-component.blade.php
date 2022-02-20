<div>

<div id="Infosinistree" class="section db">
    <div class="container-fluid">
        <div class="section-title text-center">
            <h3>Informations du Sinistré</h3>
            @if (session()->has('status') )
            <div class="alert alert-success" role="al">   {{ session()->get('status')}} </div>
             @endif
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form wire:submit.prevent="savesinistree">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" >
                                    <input class="form-control" id="age" wire:model="age" type="numerique" placeholder="Age" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('age','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="profession" wire:model="profession" type="text" placeholder="Profession" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('profession','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="nom" wire:model="nom" type="text" placeholder="Nom " required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('nom','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="prenom" wire:model="prenom" type="text" placeholder="Prenom" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('prenom','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="form-group">
                                    <input class="form-control" id="Protection" wire:model="protection" type="text" placeholder="Protection choisis" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                    {!! $errors->first('protection','<span class="help-block">:message </span>')!!}
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="photo" wire:model="photo" type="text" placeholder="Photo de la facture" required="required" data-validation-required-message="Please enter your phone number.">
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
</div>

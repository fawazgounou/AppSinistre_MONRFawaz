<div>
    <div id="InfoSinistre" class="section db">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Informations du Sinistre</h3>
           @if (session()->has('status') )
         <div class="alert alert-success" role="al">   {{ session()->get('status')}} </div>
           @endif
                     </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form wire:submit.prevent="savesinistre">
                             @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="type" wire:model="type" type="text" placeholder="Type" required="required" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                        {!! $errors->first('type','<span class="help-block">:message </span>')!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="lieu" wire:model="lieu" type="text" placeholder="Lieu" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                        {!! $errors->first('lieu','<span class="help-block">:message </span>')!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="date" wire:model="date" type="date" placeholder="Date" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                        {!! $errors->first('date','<span class="help-block">:message </span>')!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="heure" wire:model="heure" type="time" placeholder="Heure" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                        {!! $errors->first('heure','<span class="help-block">:message </span>')!!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="NombrePersonne" wire:model="NombrePersonne" type="text" placeholder="Nombre de personne" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                        {!! $errors->first('NombrePersonne','<span class="help-block">:message </span>')!!}
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="photo" wire:model="photo" type="photo" placeholder="Photo" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                        {!! $errors->first('Photo','<span class="help-block">:message </span>')!!}
                                    </div>
                                </div> --}}

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="description" type="message" wire:model="description" placeholder="Description" required="required" data-validation-required-message="Please enter a message."></textarea>
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
</div>

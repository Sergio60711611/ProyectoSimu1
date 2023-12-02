<!---msj de cliente registrado correctamente -->
@if(Session::has('message'))
  <div class="col-lg-12" id="msj">
    <div class="alert alert-success alert-success-style1 alert-success-stylenone" style="border-color:#8bc349; background-color: #8bc349; color:#ffffff;">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
        <span class="adminpro-icon adminpro-checked-pro admin-check-sucess admin-check-pro-none"></span>
        <p class="message-alert-none">
        
            <strong> {{ Session::get('message') }} </strong>
        </p>
    </div>
</div>
@endif
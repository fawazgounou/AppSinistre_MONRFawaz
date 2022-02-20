<div>
  <!-- /.row -->
  <br> <br> <br>
  <div class="row">
     <div class="col-12">


           <h3 class="" style="text-align: center">Les utilisateurs</h3>


         <!-- /.card-header -->

             <div class=" row cm">
                 @foreach ($users as $user)
                 <a href="{{route('consulte',['user_id'=>$user->id])}}"><div class="btn ">
                   <li> <span  class="badge badge-primary  text-center compte">
                    Nom Prénom :{{$user->name}} {{$user->prenom}}<br>
                    Email : {{$user->email}}<br>
                   Téléphone : {{$user->telephone}}
                </li>
            </div>
        </a>
              @endforeach
            </div>





         <!-- /.card-body -->

       <!-- /.card -->
     </div>
   </div>
   <!-- /.row -->
</div>

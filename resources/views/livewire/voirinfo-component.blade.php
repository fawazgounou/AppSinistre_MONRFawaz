<div>
   <!-- /.row -->
   <br> <br> <br>
   <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title" style="text-align: center">Mes Soumissions</h3>


          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
              <div class="row">
                  @foreach ($sinistres as $sinistre)
              <div class="col-md-4">
                  id :{{$sinistre->id}} <br>
                  Age :{{$sinistre->age}} <br>
                  Profession :{{$sinistre->profession}}<br>
                  Nom : {{$sinistre->nom}}<br>
                 Prenom : {{$sinistre->prénom}}<br>
                  Protection choisis : {{$sinistre->protection_choisis}}<br>
              </div>
              @endforeach
              <div class="col-md-12">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Type</th>
                  <th>Lieu</th>
                  <th>Date</th>
                  <th>heure</th>
                  <th>Nombre de personne</th>
                  {{-- <th>Photo</th> --}}
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($accident as $accidents)
                <tr>
                  <td>{{$accidents->id}}</td>
                  <td>{{$accidents->type}}</td>
                  <td>{{$accidents->lieu}}</td>
                  <td>{{$accidents->date}}</td>
                  <td>{{$accidents->heure}}</td>
                  <td>{{$accidents->nombre_personne}}</td>
                  {{-- <td>{{$accidents->photo}}</td> --}}
                  <td>{{$accidents->description}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

      </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->

</div>

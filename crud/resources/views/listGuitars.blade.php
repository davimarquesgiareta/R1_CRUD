@extends('templates.template')
@section('content')
@csrf
@foreach($guitars as $guitar)
<div class="card p-2 my-3">
    <div class="row">
        <div class="col-md-3">
            <img src="{{$guitar->photo}}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-md-9 p-3">
            <h3>{{$guitar->model}}</h3>
            <p>
                <strong>Marca:</strong> {{$guitar->brand}} <br>
                <strong>Preço:</strong> R$ {{$guitar->price}} <br>
                <strong>Cor:</strong> {{$guitar->color}} <br>
                <strong>Ano:</strong> {{$guitar->year}} <br>
                <strong>Cadastrado em:</strong> {{$guitar->created_at}}
            </p>
            <p>
               {{$guitar->description}}
            </p>
            <p class="text-right">
              <a href="{{"$guitar->id/edit"}}" class="btn btn-primary">Editar</a>
              <a href="{{"/guitar/$guitar->id/delete"}}" class="btn btn-danger"> Deletar</a>    
            </p>
        </div>
    </div>
</div>

@endforeach()

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ATENÇÃO!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Deseja mesmo deletar este registro?
          <?php echo @$id  ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          @if(isset($id))
          <form method="POST" action="{{"/guitar/$id"}}"> 
          @else 
          <form method="POST" action="{{"/guitar/$guitar->id"}}"> 
          @endif
            @csrf 
            @method('delete')
            <button type="submit" class="btn btn-danger">Deletar</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php 
  if(@$id != ""){
    echo "<script>
      $(function(){
        $('#exampleModal').modal('show');
      });
      </script>";
  }
  ?>
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" class="center-block">
            
                <center> {{$error}}</center>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success" class="center-block">
      
        <center> {{session('success')}}</center>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" class="center-block">
        
       
        <center> {{session('error')}}</center>
    </div>
@endif
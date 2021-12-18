@foreach ($errors->all() as $error)
    <p><span class="help-block text-danger">{{$error}}</span></p>
@endforeach
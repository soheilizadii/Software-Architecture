@if($errors->any())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p style="border-bottom:solid white 2px;padding-bottom:3px;">
     {{$error}}
    </p>
    @endforeach
    </div>
@endif
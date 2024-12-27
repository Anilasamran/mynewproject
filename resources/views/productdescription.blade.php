
<div class="container">
    <div class="row">
    @foreach($description as $descriptive)
        <div class="col-md-6">
            <div class="img">
        <img src="{{ asset($descriptive->image) }}" class="img-fluid" style="width:auto; height:350px;" alt="{{ $descriptive->name }}">
</div>
    </div>
        <div class="col-md-5">
            <div class="details">
        <h4>{{ $descriptive->product_name }}</h4>
        <h6>{{ $descriptive->description }}</h6></div>
        </div>
        @endforeach
    </div>
</div>
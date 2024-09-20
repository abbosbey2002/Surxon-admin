<div class="col-md-4">
    <div class="card bg-{{ $color ?? 'secondary' }} mb-3"> <!-- Default color is 'secondary' -->
        <div class="card-body">
            <h3>{{ $title }}</h3>
            <!-- Default value if $value is not provided -->
            <p>{{ $value ?? 'N/A' }}</p>
        </div>
    </div>
</div>

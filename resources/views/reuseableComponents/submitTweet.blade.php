@auth()

<h4> CAST A SPELL </h4>
<div class="row">
    <form action="{{route('tweets.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="form-control" id="idea" rows="3"></textarea>
            @error('content')
                <span class="d-block fs-6 text-danger mt-2"> {{$message}}</span>
            @enderror
        </div>
        <div class="">
            <button id="share-button"type="submit" class="btn btn-dark"> SHARE </button>
        </div>
    </form>
</div>
@endauth
@guest
    <h4 class="fw-bold">Login to Cast Your Spell</h4>
@endguest


<script>
    document.getElementById('share-button').addEventListener('mouseover', function() {
        this.style.backgroundColor = '#ffffff';
        this.style.color ='#000000';
    });

    document.getElementById('share-button').addEventListener('mouseout', function() {
        this.style.backgroundColor = '#555555';
        this.style.color ='#ffffff';
    });
</script>


<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Search</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboardPage') }}" method="GET">
            <input value="{{ request('search','')}}" name="search" placeholder="search" class="form-control w-100" type="text">
            <button id="search-button" class="btn btn-dark mt-2"> Search</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('search-button').addEventListener('mouseover', function() {
        this.style.backgroundColor = '#ffffff';
        this.style.color ='#000000';
    });

    document.getElementById('search-button').addEventListener('mouseout', function() {
        this.style.backgroundColor = '#555555';
        this.style.color ='#ffffff';
    });
</script>

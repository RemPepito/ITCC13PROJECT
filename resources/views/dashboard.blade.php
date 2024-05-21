@extends('layout.layout')

@section('mainpage')
    <div class="row justify-content-center">
        <div class="col-8">
            @include('reuseableComponents.successMessage')
            @include('reuseableComponents.errorMessage')
            @include('reuseableComponents.submitTweet')
            <hr>
            @if (count($tweets) > 0)
                @foreach ($tweets as $tweet)
                    <div class="mt-3">
                        @include('reuseableComponents.tweetCard')
                    </div class="mt-3">
                @endforeach
            @else
                No Results Found
            @endif
            <div>
                {{ $tweets->withQueryString()->links() }}
            </div>
        </div>
        <div class="col-4">
            @include('reuseableComponents.searchComp')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="mt-3">
                <p class="mx-1">Follow TWD's Social Media</p>
                <a data-mdb-ripple-init class="btn btn-primary" id="instagram-button" style="background-color: #bc2a8d;" role="button" href="https://www.instagram.com/thewizarddispatch/">
                <i class="fab fa-instagram-square me-2"></i>Instagram</a>
                <a data-mdb-ripple-init class="btn btn-primary" id="facebook-button" style="background-color: #3b5998;" href="https://www.facebook.com/thewizarddispatch" role="button">
                <i class="fab fa-facebook-square me-2"></i>Facebook</a>
                <a data-mdb-ripple-init class="btn btn-primary" id="contact-button" href="https://mail.google.com/mail/u/0/#inbox" role="button">
                <i class="fas fa-envelope me-2"></i>Contact us</a>

            </div>
        <!--CAROUSEL NEWS FEED-->
            <div class="mt-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button"><span style="font-size:large;"><strong>WIZARD'S NEWS FEED</strong></span></button>
            </div>
            <p class="text-center mt-1">See the latest news in CCS</p>

            <div id="carouselExampleControls" class="carousel slide border border-primary" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <a href="https://www.facebook.com/photo.php?fbid=414987978021437&set=pb.100085307143884.-2207520000&type=3" target="_blank"><img src="https://scontent.fmnl13-1.fna.fbcdn.net/v/t39.30808-6/436465040_414987971354771_7389186419908687108_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=UPmZ2k88DJYQ7kNvgFDqrh-&_nc_ht=scontent.fmnl13-1.fna&oh=00_AYDZS20v7D5xHD-5rZ4SOt5odAizApwRVmZ3oDEMmjjB4w&oe=664F6F24"
                    class="d-block w-100" alt="EMC screening their animated films"></a>
                    </div>
                    <div class="carousel-item">
                    <a href="https://www.facebook.com/photo.php?fbid=399815072872061&set=pb.100085307143884.-2207520000&type=3" target="_blank"><img src="https://scontent.fmnl4-7.fna.fbcdn.net/v/t39.30808-6/438864453_399815069538728_8916349962565252133_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=SvU5KcqJ2ikQ7kNvgGm4mfX&_nc_ht=scontent.fmnl4-7.fna&oh=00_AYD79vqloXnwp8gyG1OHg4Izyfbl1iXK9x7yMm77S5IxSg&oe=664F58D8"
                    class="d-block w-100" alt="XU CCS scholars take innovation to stage"></a>
                    </div>
                    <div class="carousel-item">
                    <a href="https://www.facebook.com/photo.php?fbid=387933760726859&set=pb.100085307143884.-2207520000&type=3" target="_blank"><img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t39.30808-6/435090489_387933757393526_4644003660758184144_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=6AusBLZzV8IQ7kNvgHvvxLl&_nc_ht=scontent.fmnl4-1.fna&oh=00_AYC4-MjhiHGbVIzNpJY6-mBe9AINgpyM-9Lef9-jKeV2Tw&oe=664F7DAB"
                    class="d-block w-100" alt="Lampoon: FH replace AC units with electric fans"></a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>

        <script>
            //instagram
            document.getElementById('instagram-button').addEventListener('mouseover', function() {
                this.style.backgroundColor = '#ffffff';
                this.style.color ='#000000';
            });

            document.getElementById('instagram-button').addEventListener('mouseout', function() {
                this.style.backgroundColor = '#bc2a8d';
                this.style.color ='#ffffff';
            });

             //facebook
             document.getElementById('facebook-button').addEventListener('mouseover', function() {
                this.style.backgroundColor = '#ffffff';
                this.style.color ='#000000';
            });

            document.getElementById('facebook-button').addEventListener('mouseout', function() {
                this.style.backgroundColor = '#3b5998';
                this.style.color ='#ffffff';
            });

             //contact
             document.getElementById('contact-button').addEventListener('mouseover', function() {
                this.style.backgroundColor = '#ffffff';
                this.style.color ='#000000';
            });

            document.getElementById('contact-button').addEventListener('mouseout', function() {
                this.style.backgroundColor = '#333333';
                this.style.color ='#ffffff';
            });

        </script>


    </div>
@endsection

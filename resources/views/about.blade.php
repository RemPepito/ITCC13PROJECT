@extends('layout.layout')

@section('mainpage')
<main role="main">
    <div class="container py-4">

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">The Wizard Discussion 🧙‍♂️📰✨</h1>
        <p class="col-md-8 fs-4">The Wizard Discussion is a student platform for the College of Computer Studies!
            This platform is anchored and under by <strong>The Wizard Dispatch</strong> and is up and running since 2022.
            The Wizard Dispatch is a school publication dedicated only for the wizards, College of Computer Studies.
            They handle the college's media assets, from sports news to academic news, it is always there for the college.</p>


            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
        View More
        </button>
      </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MORE ABOUT TWD...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

            <strong>The Wizard Dispatch: A Brief Background</strong><br>
            The Wizard Dispatch, established in 2022, is the official school publication exclusively dedicated to the wizards of the College of Computer Studies. As a media powerhouse within the college, it plays a pivotal role in disseminating information,
            fostering community engagement, and celebrating the achievements of students and faculty alike. The Dispatch operates under the umbrella of The Wizard Discussion, a dynamic student platform that serves as a hub for all things related to computer science, technology, and academic life.
            <br><br>

            <img src="https://i.pinimg.com/originals/fe/f8/65/fef865f1df5fa7bfefafaa56f4d7aaec.gif" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
            <br><br>
            Above all, The Wizard Discussion and The Wizard Dispatch are integral parts of the College of Computer Studies, providing a platform for communication, celebration, and community building.
            Their commitment to excellence and accurate reporting ensures that wizards remain informed and engaged throughout their academic journey. 🧙‍♂️📰✨
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


      <div class="container marketing">
      <h1 class="text-center fw-bold">Connect and Grow with us</h1>
      <hr class="dashed">
<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <img src="https://i.pinimg.com/originals/73/69/6e/73696e022df7cd5cb3d999c6875361dd.gif" alt="Media" width="140" height="140"style="margin-bottom:5px;">
    <h2>Connection</h2>
    <p>To weave a digital tapestry that connects every wizard within the College of Computer Studies. We envision a vibrant platform where students, faculty, and alumni come together to share knowledge, collaborate on projects, and forge lasting connections.</p>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img src="https://i.pinimg.com/originals/a4/a6/b0/a4a6b0a531328e5d9c984a793fa1ac04.gif" alt="Generic placeholder image" width="140" height="140" style="margin-bottom:5px;">
    <h2>Safe haven for Growth</h2>
    <p>Imagine a virtual haven where wizards can explore, learn, and thrive without fear of judgment. Our vision is to cultivate a safe space—a sanctuary—where ideas flourish, mistakes are celebrated as stepping stones, and personal growth is nurtured.</p>

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" >
    <img class="rounded-circle" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/32033b88-36df-4487-8ca5-b2af675c64df/dgwml0w-0f514eb9-4c7a-4225-920d-5dc9b46df66f.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzMyMDMzYjg4LTM2ZGYtNDQ4Ny04Y2E1LWIyYWY2NzVjNjRkZlwvZGd3bWwwdy0wZjUxNGViOS00YzdhLTQyMjUtOTIwZC01ZGM5YjQ2ZGY2NmYuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.UJe38GRCxNj_YFTuzY7fKcuMOffq9ZoCRV7Zb_e85Zk"
    alt="Generic placeholder image" width="140" height="140">
    <h2>Community</h2>
    <p>Beyond a mere platform, The Wizard Discussion aspires to be the beating heart of the College of Computer Studies. We envision a dynamic community where wizards rally around shared goals, celebrate achievements, and support one another through challenges.</p>

  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<div id="carouselExampleCaptions" class="carousel slide">
    <div class="container text-center" style="margin-top:50px;">
        <h1 class="display-5 fw-bold ">The Wizard Dispatch Captures</h1>
        <hr class="dashed">
        <p class=" text-center">The Wizard Discussion is a student platform for the College of Computer Studies!
                    This platform is anchored and under by <strong>The Wizard Dispatch</strong> and is up and running since 2022.
                    The Wizard Dispatch is a school publication dedicated only for the wizards, College of Computer Studies.
                    They handle the college's media assets, from sports news to academic news, it is always there for the college.</p>
    </div>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://scontent.fmnl13-1.fna.fbcdn.net/v/t39.30808-6/431030304_372379365615632_2387300754593638619_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=eS87evR6VAsQ7kNvgFP1tCI&_nc_ht=scontent.fmnl13-1.fna&oh=00_AYAVm3b9WwSY8KpNF3l3aBp2WOBLAc3MImnNnf_KGjPJ7A&oe=665292D5"
      class="d-block w-100" alt="Professor and student working on the ethernet connection.">
    </div>
    <div class="carousel-item">
    <img src="https://scontent.fmnl13-2.fna.fbcdn.net/v/t39.30808-6/438303690_408628048657430_6993729687861534844_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=U2XoKcsXFdEQ7kNvgFx6Fg6&_nc_ht=scontent.fmnl13-2.fna&oh=00_AYBvD1zMTNSl5JvEClpi5WalkEY87qJm9yg2dF0ZqE0NhQ&oe=66529932"
     class="d-block w-100" alt="Intramurals - Basketball">

    </div>
    <div class="carousel-item">
    <img src="https://scontent.fmnl13-2.fna.fbcdn.net/v/t39.30808-6/425505341_409977525189149_4928028755064665948_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ziUyR7ngMnEQ7kNvgG3qy_W&_nc_ht=scontent.fmnl13-2.fna&oh=00_AYDbyVm6sKmhHVEn-qJKqEmgGMZirJQQsxZIEb1qkKL5rA&oe=665298C0"
      class="d-block w-100" alt="Esports Tournament captured">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</main>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-3 p-5">
      <img src="https://instagram.fpet4-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fpet4-1.fna.fbcdn.net&_nc_ohc=OVt8xpI5ObcAX-Ldwvx&oh=1436a129f053ba30efbeb7e68e745d1e&oe=5EA26E46" class="rounded-circle" alt="">
    </div>
    <div class="col-9 pt-5">
      <div><h1>freecodecamp</h1></div>
        <div class="d-flex">
          <div class="pr-4"><strong>153</strong> posts</div>
          <div class="pr-4"><strong>23k</strong> followers</div>
          <div class="pr-4"><strong>212</strong> following</div>
        </div>
    </div>
  </div>


    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection

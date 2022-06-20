<div class="container">
<div class="row mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Login</h1>
            @if(session()->has('error')) <span class="text-danger">{{session('error')}}</span>@endif
            <form wire:submit.prevent="submit">
            <div class="form-group">
            <label for="email">Email</label>
                <input wire:model="form.email" type="text" class="form-control" placeholder="Input your valid emaill">
                @error('form.email') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group mt-2">
            <label for="Password">Password</label>
                <input wire:model="form.password" type="Password" class="form-control"placeholder="Input your valid password">
                @error('form.password') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-block mt-4" style="background-color: #00cba9;">Login</button>
            </div>
            
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

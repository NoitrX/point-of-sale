<div class="container">
    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Employee Registration</h1>
                @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{session('message')}}
                  </div>             
                @endif
                <form wire:submit.prevent="submit">
                    <div class="form-group">
                        <label for="name">Name</label>
                            <input wire:model="form.name" type="text" class="form-control" placeholder="Input your valid emaill">
                            @error('form.name') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                <div class="form-group">
                <label for="email">Email</label>
                    <input wire:model="form.email" type="text" class="form-control" placeholder="Input your valid emaill">
                    @error('form.email') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                <label for="Password">Password</label>
                    <input wire:model="form.password" type="Password" class="form-control"placeholder="Input your valid password">
                    @error('form.password') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                <label for="Password">Password</label>
                    <input wire:model="form.password_confirmation" type="Password" class="form-control"placeholder="Repeat your password">
                    
                </div>
                <div class="form-group">
                    <button style="background-color:#00cba9;" class="btn btn-block btn mt-4">Register</button>
                </div>
                
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    

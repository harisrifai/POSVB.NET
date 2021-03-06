<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4"> 
   
                <div class="card">
                    <div class="card-body sm-8">
                            <h1 class="text-center">  Login</h1>
                            @if(session()->has('error'))<span class="text-danger">{{session('error')}}</span>@endif
                            <form wire:submit.prevent="submit">
                                <div class="form-group">                                    
                                    <label for="email">Email</label>
                                    <input wire:model="form.email" type="text" class="form-control" placeholder="Input your Email">
                                    @error('form.email') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group">                                    
                                    <label for="password">Password</label>    
                                    <input wire:model="form.password"  type="password" class="form-control" placeholder="Input Password">
                                    @error('form.password') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                                <div class="form-group">                                    
                                    <label for="email"></label> 

                                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                                    <button type="reset" class="btn btn-block btn-danger">Reset</button>
                                </div>
                                
                                
                                 
                            </form>
                    </div>            
                </div>
        
            </div> 
            <div class="col-md-4"></div>
    </div>
</div>

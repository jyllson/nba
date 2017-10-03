@include('header')
@include('nav')

<div class="container">
    <h2>Login</h2>

    <hr>

    <form method="POST" action="/login">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

    <div class="alert alert-success" role="alert">
        No account? Please <a href="/register">register</a>
    </div>

    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif
</div>

@include('footer')
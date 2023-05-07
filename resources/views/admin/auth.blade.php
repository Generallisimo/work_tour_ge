<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="text-center">
  <main class="form-signin w-50 m-auto container" >
  <form style="margin-top: 200px" method="POST" action="{{ route('login') }}">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email"  value="{{ old('email') }}"  required autofocus autocomplete="username" placeholder="Email">
      <label for="email">{{__('Email')}}</label>
      @if($errors->has('email'))
            <p class="text-sm text-red-600">{{ $errors->first('email') }}</p>
        @endif
    </div>
    <div class="form-floating mt-3">
      <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password" placeholder="Password">
      <label for="password">{{ __('Password') }}</label>
      @if($errors->has('password'))
            <p class="text-sm text-red-600">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">{{ __('Log in') }}</button>
  </form>
</main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
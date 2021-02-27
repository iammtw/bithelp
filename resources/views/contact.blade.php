<!DOCTYPE html>
<html>
  <head>
    <title>Bithelp | CryptoCurrency Refund</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="icon" 
    type="image/png" 
    href="{{ url('favicon.png') }}">
  </head>
  <body>
      @include('layouts.common.banner')
      <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <div class="row">
                    <h3><b>Make Order - Contact us</b></h3>

                    @if (session('msg'))
                        <h3 style="color:red; font-weight:bolder;" class="display-3 primary "> {{ session('msg') }}  </h3>
                    @else

                    <form method="post" action="{{ url('contact') }}">
                        @csrf
                        <div class="row gtr-uniform">

                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="name" id="name" required value="" placeholder="Name" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input type="email" name="email" id="email" value="" required placeholder="Email" />
                            </div>
                            <!-- Break -->
                            <div class="col-12">
                                <select name="service" required id="category">
                                    <option value="" >- Select service -</option>
                                   
                                   @foreach ($services as $service)
                                   <option value="{{$service->title}}">{{$service->title}}</option>
                                   @endforeach
                                </select>
                            </div>
                           
                            <!-- Break -->
                            <div class="col-12">
                                <textarea name="message" required id="textarea" placeholder="Enter your message here" rows="6"></textarea>
                            </div>
                            <!-- Break -->
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Submit" class="primary" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                        
                    @endif

                   


                </div>
            </div>
        </div>
    </section>
      @include('layouts.common.footer')
      @include('layouts.common.js')
  </body>
</html>

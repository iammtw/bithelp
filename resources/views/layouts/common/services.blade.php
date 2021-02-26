<section class="wrapper" id="services">
    <div class="inner">
      <header class="special">
        <h2>Our Services</h2>
        <p>
          {{$setting->services}}
        </p>
      </header>
      <div class="highlights">

        @foreach ($services as $service)
          <section>
            <div class="content">
              <header>
                <a href="#" class="icon {{$service->icon}}"
                  ><span class="label">Icon</span></a
                >
                <h3>{{$service->title}}</h3>
              </header>
              <div style="height: 150px">
                <p>
                  {{$service->extert}}
                </p>
              </div>
              <div style="padding-top: 50px">
                <a href="#" class="button small primary">Buy now</a>
                <a href="#" class="button small">${{$service->price}}</a>
              </div>
            </div>
          </section>
        @endforeach
        
      </div>
    </div>
  </section>
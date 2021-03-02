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

    <style>
        .accordion {
          background-color: #eee;
          color: #444;
          cursor: pointer;
          padding: -7px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
          transition: 0.4s;
          margin-bottom: 10px;
        }
        
        .active, .accordion:hover {
          background-color: #ccc;
        }
        
        .accordion:after {
          content: '\002B';
          color: #777;
          font-weight: bold;
          float: right;
          margin-left: 5px;
        }
        
        .active:after {
          content: "\2212";
        }
        
        .panel {
          padding: 0 18px;
          background-color: white;
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.2s ease-out;
        }
        </style>
  </head>
  <body>
     <!-- Heading -->
			<div id="heading" >
				<h1>About us</h1> 
				
			</div>
			

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Bithelp - All About CryptoCurrency Problem Solver</h2>
						</header>
                        
                    @foreach ($faqs as $faq)
                    <button class="accordion">
                        {{$faq->question}}
                    </button>

                    <div class="panel">
                        <p>
                            {{$faq->answer}}
                        </p>
                    </div>
                    @endforeach
                    
					</div>
				</div>
			</section>

      @include('layouts.common.footer')
      @include('layouts.common.js')
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
        </script>
</script>
  </body>
</html>


		

	
	
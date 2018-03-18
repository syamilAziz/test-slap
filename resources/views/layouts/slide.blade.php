<div class="bs-example center">
    <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <img src="/storage/slide/81431272954_295x200.jpg" width="410px" height="900px" alt="First Slide">
         		<div class="carousel-caption">
                  <h3>COF LOGIN</h3>
                  <a href="{{ url('/admin/login') }}">
                    <button type="button" class="btn btn-primary">COF LOGIN</button></a>
                </div>
            </div>
            <div class="item">
                <img src="/storage/slide/ui-sam.jpg"  height="900px" alt="Second Slide">
                <div class="carousel-caption">
                  <h3>HAULIER LOGIN</h3>
                  <a href="{{ url('/haulier/login') }}">
                    <button type="button" class="btn btn-primary">HAULIER LOGIN</button></a>
                </div>
            </div>
            <div class="item">
                <img src="/storage/slide/fr-09.jpg" height="400px" alt="Third Slide">
                <div class="carousel-caption">
                  <h3>FOE LOGIN</h3>
                  <a href="{{ url('/employee/login') }}">
                  <button type="button" class="btn btn-primary">FOE LOGIN</button></a>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
</body>
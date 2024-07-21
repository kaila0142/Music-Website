<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawr Music</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('components.header')

    <section class="shop" id="shop">
    <h1 class="heading">rawr shop</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/3f008f00a9dd84e7a79f1afd00b9665f" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>vinyl/piringan hitam - kahitna</h3>
                <h5>Rp 450.000</h5>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/sg-11134201-22110-qadta3ef5cjv73" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>Chrisye-Sabda Alam<br> (Piringan hitam/vinyl) </h3>
                <h5>Rp 450.000</h5>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/3ea0a9ece5ff77d20e16a8af5db9e339" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>Nike Ardilla-Bintang Kehidupan <br> (piringan hitam/vinyl)</h3>
                <h5>Rp 450.000</h5>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/cbd69827f4eb10f1b2316c97dc5f36f1" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>Dewa 19-terbaik terbaik <br> (piringan hitam/vinyl)</h3>
                <h5>Rp 610.500</h5>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/56784dabe41b4d78fad51633e393b936" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>Tulus-Manusia <br> (CD)</h3>
                <h5>Rp 40.000</h5>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul3-ljmhumk63ktm95" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>Nadin Amizah-selamat ulang tahun<br> (CD)</h3>
                <h5>Rp 50.000</h5>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/cf306c10f71eec5af86793b1487b6e92" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>Tulus-Monokrom <br> (CD) </h3>
                <h5>Rp 35.000</h5>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://down-id.img.susercontent.com/file/ea8e05478a5117fb8973f877119a624f" alt="">
                <div class="share">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                </div>
            </div>
            <div class="content">
                <h3>Taylor swift-fearless <br> (CD) </h3>
                <h5>Rp 165.000</h5>
            </div>
        </div>
    </div>
  </section>
  @include('components.footer')

</body>
</html>

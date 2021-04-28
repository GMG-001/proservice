<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>home</title>
</head>
<body>
<header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M23.45 20.93a3 3 0 0 0-4.25 0l-1.45 1.45a26.14 26.14 0 0 1-4.51-3.62 26.62 26.62 0 0 1-3.62-4.51l1.45-1.45a3 3 0 0 0 0-4.25L8.24 5.73a2.93 2.93 0 0 0-2.11-.88h0A3 3 0 0 0 4 5.73L2.64 7.08A6.37 6.37 0 0 0 1 12.33c.32 3.75 2.78 8.26 6.57 12.06S15.92 30.64 19.67 31a7.87 7.87 0 0 0 .84 0 6.07 6.07 0 0 0 4.41-1.64L26.27 28a3 3 0 0 0 .88-2.13 2.93 2.93 0 0 0-.88-2.11zm1.41 5.66L23.5 27.94a4.57 4.57 0 0 1-3.66 1c-3.25-.28-7.39-2.58-10.81-6S3.31 15.41 3 12.16a4.53 4.53 0 0 1 1-3.66L5.41 7.14a1 1 0 0 1 .71-.29h0a1 1 0 0 1 .71.29L9.66 10a1 1 0 0 1 0 1.41l-2 2a1 1 0 0 0-.16 1.21 27.49 27.49 0 0 0 4.33 5.58 27.49 27.49 0 0 0 5.58 4.33 1 1 0 0 0 1.21-.16l2-2a1 1 0 0 1 1.41 0l2.83 2.83h0a1 1 0 0 1 .29.71A1 1 0 0 1 24.86 26.59zM26.6 5.39A14.92 14.92 0 0 0 16 1a1 1 0 1 0 0 2A13 13 0 0 1 29 16.11a1 1 0 0 0 1 1h0a1 1 0 0 0 1-1A14.91 14.91 0 0 0 26.6 5.39z"/><path d="M20.91,11.11a6,6,0,0,1,1.77,4.31,1,1,0,0,0,1,1h0a1,1,0,0,0,1-1,8,8,0,0,0-8-8.1,1,1,0,1,0,0,2A6,6,0,0,1,20.91,11.11Z"/></svg>
    <p class="sel">+(995) 599 55 64 64</p>
    <span>|</span>
    <p class="sel">GEO</p>
    <p>ENG</p>
    <p>RUS</p>
    <h2>HOTEL</h2>
    <p>BATUMI</p>
    <p>DAY: <span class="sel">15</span></p>
    <p>NIGHT: <span class="sel">9</span></p>
    <img src="https://www.flaticon.com/premium-icon/icons/svg/3104/3104619.svg" alt="icon">

</header>
<section class="section_1">
    <div class="border_1">
            <h1>MARTINI</h1>
            <nav class="nav_1">
                <ul>
                    <li><a href="#">მთავარი</a></li>
                    <li><a href="#">გალერეა</a></li>
                    <li><a href="#">ოთახები</a></li>
                    <li><a href="#">კონტაქტი</a></li>
                    <li><a href="#">გლემპინგი</a></li>
                </ul>
            </nav>
        <div class="l_r">
            <a href="#" class="log_in">ავტორიზაცია</a><br>
            <a href="#" class="reg">რეგისტრაცია</a>
        </div>

        <div class="reservation">
            <h2>RESERVATION</h2>
            <label for="Check-in">Check-in date</label><br>
            <input type="date" class="data" id="date"><br>
            <label for="Check-out">Check-out date</label><br>
            <input type="date" class="data" id="date1"><br>
            <label for="number"></label>
            <input type="number" class="data">
            <label for="child_num"></label>
            <input type="number">
            <label for="room_num"></label>
            <input type="number"><br>
            <button type="submit">ძიება</button>
            <script>
                let today = new Date().toISOString().split('T')[0];
                document.getElementById('date').setAttribute('min', today);
                document.getElementById('date1').setAttribute('min', today);
            </script>
            <script>

            </script>
        </div>
    </div>
{{--    <div id="carouselExampleSlidesOnly" class="carousel slide carousel_1" data-bs-ride="carousel">--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img src="{{asset('img/3.jpg')}}" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="{{asset('img/4.jpg')}}" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="{{asset('img/6.jpg')}}" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>
<section class="section_2">
    <div class="news">
        <p>
            სიახლეები
        </p>
    </div>
    <div class="contact">
        <p>
            დაგვიკავშირდით ნომერზე (995) 599 55 64 64 ან მოგვწერეთ info@martini.ge
        </p>
    </div>

</section>
<section>
    <div class="section_3">
        <div class="cat">
            <a class="rooms" href="#">ROOMS</a> <span>|</span> <a class="all_room" href="#">See all</a>
        </div>
        <div class="prod_3">
            <div class="prod_1">
                <img src="{{asset('img/2x2gzxzau4rtsr2.jpg')}}" alt="slider">
                <a href="#" class="room_name">პატარა ორადგილიანი მთის ხედით</a>
                <a class="room_decryption">ორ ადგილიანი ნომერი MINI (მთის ხედით) დამატებითი საწოლი შესაძლებელია 1 გასაშლელი სავარძელი ან 1 საბავშვო საწოლი მაქსიმალური დატვირთვა 3 პერსონა</a>
            </div>
            <div class="prod_1">
                <img src="{{asset('img/klfoj90icdd1q7e.jpg')}}" alt="slider">
                <a href="#" class="room_name">პატარა ორადგილიანი მთის ხედით</a>
                <a class="room_decryption">ორ ადგილიანი ნომერი MINI (მთის ხედით) დამატებითი საწოლი შესაძლებელია 1 გასაშლელი სავარძელი ან 1 საბავშვო საწოლი მაქსიმალური დატვირთვა 3 პერსონა</a>
            </div>
            <div class="prod_1">
                <img src="{{asset('img/tretvpdbrmoe7fd.jpg')}}" alt="slider">
                <a href="#" class="room_name">პატარა ორადგილიანი მთის ხედით</a>
                <a class="room_decryption">ორ ადგილიანი ნომერი MINI (მთის ხედით) დამატებითი საწოლი შესაძლებელია 1 გასაშლელი სავარძელი ან 1 საბავშვო საწოლი მაქსიმალური დატვირთვა 3 პერსონა</a>
            </div>
        </div>
    </div>
</section>
<hr>
<footer>
<div class="border">
    <p class="footer_p1">
        © 2021 Hotel Martini
    </p>
    <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 128 128"><path fill="#231f20" d="M63.109 50.721c1.099 0 1.625-.87 1.625-2.608v-7.909c0-1.74-.526-2.605-1.625-2.605-1.1 0-1.627.865-1.627 2.605v7.909c0 1.738.527 2.608 1.627 2.608z"/><path fill="#231f20" d="M64 7.989c-30.884 0-56.01 25.126-56.01 56.01 0 30.885 25.126 56.012 56.01 56.012 30.885 0 56.011-25.127 56.011-56.012C120.01 33.115 94.884 7.989 64 7.989zm29.771 69.494c0 4.301 0 9.176-1.028 13.632-.866 3.775-3.982 6.596-7.755 7.02-6.493.725-13.073.784-19.806.784H62.58c-6.733 0-13.313-.06-19.807-.784-3.773-.424-6.89-3.245-7.753-7.019-1.022-4.444-1.022-9.115-1.022-13.633 0-4.287 0-9.146 1.032-13.634.868-3.776 3.985-6.597 7.755-7.018 6.5-.728 12.972-.786 20.153-.786H64.847l.001 1v-1c7.179 0 13.65.059 20.149.786 3.773.421 6.89 3.241 7.756 7.019 1.017 4.428 1.017 9.074 1.017 13.567v.066zM63.109 34.531c1.707 0 3.03.644 3.975 1.928.714.951 1.059 2.419 1.059 4.427v6.585c0 1.999-.345 3.479-1.059 4.423-.944 1.28-2.268 1.924-3.975 1.924-1.695 0-3.024-.644-3.965-1.924-.727-.944-1.067-2.424-1.067-4.423v-6.585c0-2.008.341-3.476 1.067-4.427.94-1.285 2.27-1.928 3.965-1.928zm-15.694.829c-.795-2.339-1.626-4.691-2.421-7.027h3.976l2.681 9.905 2.576-9.905h3.824-.005L53.501 43.34v10.216h-3.778V43.34c-.341-1.811-1.098-4.463-2.308-7.98zm26.966 14.563c.073.528.339.798.798.798.68 0 1.396-.528 2.152-1.595V34.76h3.406v18.796h-3.406v-2.052c-1.357 1.557-2.65 2.312-3.892 2.312-1.098 0-1.854-.446-2.192-1.399-.189-.567-.304-1.469-.304-2.794V34.76h3.396v13.837c0 .8 0 1.215.042 1.326z"/><path fill="#231f20" d="M47.868 89.549V68.1h4.039v-3.517H40.154V68.1h3.965v21.449zM82.595 70.721c-1.719 0-3.064.631-4.035 1.907-.719.939-1.041 2.394-1.041 4.384v6.516c0 1.973.365 3.443 1.082 4.371.973 1.271 2.314 1.908 4.082 1.908 1.758 0 3.141-.668 4.074-2.018a4.815 4.815 0 00.785-2.02c.032-.34.074-1.088.074-2.172v-.491h-3.441c0 1.353-.04 2.097-.072 2.28-.193.902-.678 1.354-1.508 1.354-1.154 0-1.719-.857-1.719-2.582v-3.295h6.74v-3.852c0-1.99-.339-3.444-1.045-4.384-.943-1.275-2.284-1.906-3.976-1.906zm1.651 7.335h-3.369v-1.72c0-1.72.564-2.582 1.691-2.582 1.113 0 1.678.862 1.678 2.582v1.72zM62.091 89.549V70.947h-3.375v14.218c-.744 1.053-1.455 1.576-2.131 1.576-.451 0-.707-.266-.789-.787-.03-.109-.03-.523-.03-1.311V70.947h-3.369v14.71c0 1.314.112 2.199.298 2.766.335.943 1.084 1.385 2.172 1.385 1.238 0 2.512-.75 3.85-2.286v2.028h3.374zM65.009 64.583v24.966h3.369v-1.803c1.126 1.393 2.282 2.061 3.481 2.061 1.344 0 2.245-.707 2.694-2.092.225-.787.34-2.026.34-3.746v-7.41c0-1.759-.115-2.991-.34-3.74-.449-1.393-1.351-2.098-2.694-2.098-1.237 0-2.392.68-3.481 2.016v-8.153h-3.369zm5.049 9.171c.973 0 1.467.862 1.467 2.539v7.941c0 1.68-.494 2.506-1.467 2.506-.554 0-1.117-.266-1.68-.826v-11.34c.563-.554 1.126-.82 1.68-.82z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 127.999 128"><path fill="#231f20" d="M64.053 75.321c6.188 0 11.207-4.861 11.207-10.855 0-6-5.02-10.857-11.207-10.857-6.186 0-11.203 4.857-11.203 10.857 0 5.993 5.017 10.855 11.203 10.855zM76.748 53.924h6.305a2.52 2.52 0 002.512-2.514v-6.009a2.522 2.522 0 00-2.512-2.516h-6.305a2.52 2.52 0 00-2.512 2.516v6.009a2.518 2.518 0 002.512 2.514z"/><path fill="#231f20" d="M81.398 65.072c0 9.276-7.768 16.802-17.346 16.802-9.576 0-17.342-7.525-17.342-16.802 0-1.667.254-3.271.719-4.79h-5.123V83.85c0 1.221.996 2.213 2.217 2.213h38.848a2.218 2.218 0 0 0 2.219-2.213V60.282h-4.91c.466 1.519.718 3.123.718 4.79z"/><path fill="#231f20" d="M63.998 7.989c-30.883 0-56.008 25.126-56.008 56.01 0 30.885 25.125 56.012 56.008 56.012 30.885 0 56.012-25.127 56.012-56.012 0-30.884-25.127-56.01-56.012-56.01zm27.898 77.33c0 3.938-3.223 7.158-7.16 7.158H43.268c-3.938 0-7.162-3.22-7.162-7.158V43.852c0-3.94 3.225-7.162 7.162-7.162h41.469c3.938 0 7.16 3.222 7.16 7.162v41.467z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 127.999 128"><path fill="#231f20" d="M64 7.989c-30.885 0-56.01 25.126-56.01 56.01 0 30.885 25.125 56.012 56.01 56.012 30.883 0 56.01-25.127 56.01-56.012 0-30.884-25.127-56.01-56.01-56.01zm15.83 35.358a1 1 0 0 1-1 1l-6.367.004c-4.201 0-4.969 1.636-4.969 4.858v6.684h10.92c.287 0 .561.124.75.34s.277.503.242.788l-1.555 12.033a1 1 0 0 1-.992.872h-9.365v29.879a1 1 0 0 1-1 1H54.07a1 1 0 0 1-1-1V69.926h-9.395a1 1 0 0 1-1-1V56.893a1 1 0 0 1 1-1h9.395v-7.875c0-10.43 6.312-16.908 16.475-16.908 4.369 0 8.23.325 9.416.482a1 1 0 0 1 .869.991v10.764z"/></svg>
    </div>
    <p class="footer_p2">
        Created by ProService
    </p>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>

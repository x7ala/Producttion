@include('frontend.header');


<form action="{{ route('contact.store') }}" method="POST">
    @csrf

    <div class="container">
        <h1>Bize Ulaşın</h1>

        <div class="row">
            <div class="col-lg-6"> <!-- Adjust the width as needed -->
                <!-- Name Field -->
                <div class="mb-3 mt-7">
                    <label for="name" class="form-label">Isim</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Adınızı girin" required>
                </div>

                <!-- Phone Number Field -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefon Numarası</label>
                    <input type="tel" class="form-control" id="phone" name="number" placeholder="Telefon numaranızı girin" required>
                </div>

                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email girin" required>
                </div>

                <!-- Message Field -->
                <div class="mb-3">
                    <label for="message" class="form-label">Mesaj</label>
                    <textarea class="form-control" id="message" name="msg" rows="5" placeholder="Mesajınızı buraya yazın..." required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Gönder</button>
            </div>

            <div class="col-md-6 mx-auto adrs-card2">
                <div class="card">
                    <img src="imgs/Address.jpg" class="card-img-top" alt="Card 4">
                    <div class="card-body">
                        <ul style="list-style: none;padding-left: 0;">
                            <li style="margin-bottom: 20px;"><a href="" style="margin-bottom:10px;text-decoration: none;color: black;"><i class="fa fa-map-marker"></i> Site Mahallesi . Samanyolu Caddesi. No 102 Çakmak- Ümraniye 34760 İSTANBUL-TÜRKİYE </a></li>
                            <li style="margin-bottom: 20px;"><a href="" style="text-decoration: none;color: black;"><i class="fa fa-phone"></i> (0216) 533 78 72 / (0216) 533 78 73 / 0532 726 09 98</a></li>
                            <li><a href="" style="text-decoration: none;color: black;"><i class="fa fa-envelope"></i> yavuz@producttion.com / berk@producttion.com</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <br>

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    </div>

@include('frontend.footer');

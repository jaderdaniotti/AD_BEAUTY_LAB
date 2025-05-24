<x-layout>
    <section class="bg-carne d-flex flex-column gap-3 justify-content-center align-items-center p-3 py-5 min-vh-50" id="home">

    </section>
    
      <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        let homesection = document.getElementById('home');

        function animazioneHome(element) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        var typed = new Typed(element, {
                            strings: [
                                '<h1 class="display-1">AD Beauty Lab</h1><div class="row justify-content-center gap-1"><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-person-fill"></i></span></a><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-shop"></i></span></a></div><div class="row justify-content-center gap-1"><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-brush"></i></span></a><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-telephone-fill"></i></span></a></div>'
                            ],
                            typeSpeed: 10
                        });
                        observer.unobserve(element); // Smette di osservare l'elemento dopo l'intersezione
                    }
                });
            });

            observer.observe(element);
        }

        animazioneHome(homesection);
    </script>
    <section class="bg-salvia min-vh-100 p-3" id="chi-sono">
        <div class="row">
            <div class="col-12 col-lg-5 d-flex justify-content-center ">
                <img src="\immagini\estetista.png" alt=""
                    class="img-fluid object-fit-contain animate__animated animate__backInLeft">
            </div>
            <div class="col-12 d-lg-none">
                <hr>
            </div>
            <div class="col-12 col-lg-7 d-flex flex-column gap-3 px-3 justify-content-center align-items-center">
                <h1 class="display-1">Chi sono?</h1>
                <p class="fs-5 fw-light text-center">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quidem quasi dignissimos reiciendis
                    recusandae, maiores dolores. Perferendis illo, impedit deleniti cum placeat provident eum sunt
                    aperiam, eos debitis iusto obcaecati.
                </p>
            </div>
        </div>
    </section>
</x-layout>

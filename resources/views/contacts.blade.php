<x-layout>
    <div class="container d-flex justify-content-center">
        <div class="contact-container" data-slide-down>
            <h2 data-aos="zoom-in">Contattami</h2>
            <form action="#" method="post" >
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Inserisci il tuo nome" required
                    data-aos="flip-left">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Inserisci la tua email" required
                    data-aos="flip-right">

                <label for="message">Messaggio</label>
                <textarea id="message" name="message" placeholder="Scrivi il tuo messaggio..." required data-aos="fade-up"></textarea>

                <button type="submit" class="submit-btn" data-aos="zoom-in">Invia</button>
            </form>
        </div>
    </div>
</x-layout>

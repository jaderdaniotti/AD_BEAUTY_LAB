<x-layout>
    <style>
        .contact-container {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background-color: var(--carne);
            border-radius: 10px;
            box-shadow: 0 0 10px var(--salvia);
            text-align: center;
        }

        h2 {
            color: var(--coloretesto);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            color: var(--salvia);
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 2px solid var(--cipria);
            border-radius: 5px;
            background: var(--mattone);
            color: var(--coloretesto);
        }

        textarea {
            height: 100px;
            resize: none;
        }

        .submit-btn {
            margin-top: 15px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: var(--coloretesto);
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .submit-btn:hover {
            background-color: var(--cipria);
        }

        [data-slide-down] {
            opacity: 0;
            transform: translateY(-50px);
            animation: slideDown 0.8s ease-in-out forwards;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
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

</x-layout>

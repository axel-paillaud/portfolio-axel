<footer class="bg-main text-white">
    <x-marquee-contact />
    <section id="contact" class="flex flex-col items-center gap-16 sm:p-16 p-8 border-b-2">
        <p>
            Une idée ? Un projet sur lequel vous avez besoin d'aide ? Une question ?
        </p>
        <p id="js-split-char" class="text-4xl sm:text-6xl md:text-8xl text-center uppercase flex">
            contactez-moi
        </p>
        <a
            href="mailto:contact@axelweb.fr?subject=Contact%20depuis%20Portfolio%20!"
        >
            contact@axelweb.fr
        </a>
        <div class="flex gap-8">
            <x-social-media
                class="fa-brands fa-linkedin"
                href="https://www.linkedin.com/in/axel-paillaud/"
            >
                LinkedIn
            </x-social-media>
            <x-social-media
                class="fa-regular fa-file"
                href="/assets/cv/AxelPaillaud.pdf"
            >
                CV
            </x-social-media>
            <x-social-media
                class="fa-brands fa-github"
                href="https://github.com/axel-paillaud"
            >
                GitHub
            </x-social-media>
        </div>
    </section>
    <div class="p-8">
        Made with <i class="fa-solid fa-heart"></i> by Axel
    </div>
</footer>

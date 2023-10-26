<footer id="footer">
    <div class="footer__content">
        <div class="footer__text">I hope you like what you see. Feel free to contact me at any time. I'm looking forward to hear from you. Let's build something that just works.</div>
        <div class="footer__email">
            <a href="mailto:contact@matthiasdevers.com">contact@matthiasdevers.com</a>
        </div>
        <div class="footer__contact">
            {{ include('/templates/contact.php') }}
        </div>
        <div class="footer__bottom">
            <nav class="footer__nav">
                <a class="footer__link" href="/legal-notice">Legal Notice</a>
                <a class="footer__link" href="/about">About</a>
                <a class="footer__link" href="/projects">Projects</a>
                <a class="footer__link" href="/visuals">Visuals</a>
            </nav>
            <div class="footer__copyright">Copyright © {{ "now"|date("Y") }} Matthias Devers. All rights reserved.</div>
        </div>
    </div>
    <div class="footer__scroll-text">
        <div class="scroll-text">Let's build something that just works.</div>
    </div>
</footer>
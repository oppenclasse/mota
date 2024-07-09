<footer>
    <div class="footer-content">
        <div class="legal-links">
            <a href="<?php echo esc_url(home_url('/mentions-legales')); ?>">Mentions légales</a>
            <a href="<?php echo esc_url(home_url('/politique-de-confidentialite')); ?>">Vie privée</a>
        </div>
        <p class="copyright">&copy; <?php echo date('Y'); ?> Tous droits réservés.</p>
    </div>
</footer>


</body>
</html>
<style>
    /* Style CSS pour le footer */
footer {
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
    border-top: solid;
}

.footer-content {
    display: flex;
    justify-content: center;
    align-items: center;
}

.legal-links {
    margin-right: 20px;
}

.legal-links a {
    text-decoration: none;
    color: #333;
}

.copyright {
    margin-top: 10px;
}

</style>
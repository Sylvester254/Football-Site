<!-- Footer -->

<footer id="footer">
    <?php
    // Read the JSON file
    $json_file = file_get_contents('jsons/sponsors.json');

    // Parse the JSON data into an associative array
    $data = json_decode($json_file, true);

    // Generate the HTML code for the sponsors section
    $html = '<section class="sponsors">
            <h2>Our Sponsors</h2>
            <ul class="icons">';

    foreach ($data['sponsors'] as $sponsor) {
        $html .= '<li><a href="' . $sponsor['url'] . '" target="_blank">';
        $html .= '<img src="' . $sponsor['image_path'] . '" alt="' . $sponsor['name'] . '" style="max-width: 10%; height: auto;">';
        $html .= '</a></li>';
    }

    $html .= '</ul>
        </section>';

    // Output the HTML code
    echo $html;
    ?>
    <h2>Follow</h2>
    <ul class="icons">
        <li><a href="https://www.youtube.com/manutd" class="icon brands circle fa-youtube" style="color: red; font-size: 34px;"><span class="label">Youtube</span></a></li>
        <li><a href="http://instagram.com/manchesterunited" class="icon brands circle fa-instagram" style="color: red; font-size: 34px;"><span class="label">Instagram</span></a></li>
        <li><a href="https://twitter.com/ManUtd" class="icon brands circle fa-twitter-square" style="color: red; font-size: 34px;"><span class="label">Twitter</span></a></li>
        <li><a href="https://www.facebook.com/manchesterunited" class="icon brands circle fa-facebook" style="color: red; font-size: 34px;"><span class="label">Facebook</span></a></li>
    </ul>

    <ul class="copyright">
        <li>&copy; Manchester United</li>
    </ul>
</footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollgress.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
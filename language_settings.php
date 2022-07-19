<?php

    // $languages = file_get_contents('./languages.json');
    // $lang = json_decode($languages, true);

    // var_dump($lang);

?>

<html lang="fr">
    <head>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </head>
    <body>
        <div id="google_translate_element"></div>
        <p>The xml:lang attribute is not actually useful for handling the file as HTML, but takes over from the lang attribute any time you process or serve the document as XML. The lang attribute is allowed by the syntax of XHTML, and may also be recognized by browsers</p>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>
    </body>
</html>

<script>
    // var language = window.navigator.userLanguage || window.navigator.language;
    // let htm = document.querySelector('html');
    // htm.setAttribute('lang', language);
// alert(language);
</script>
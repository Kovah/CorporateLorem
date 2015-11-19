<?php
if (!defined('DEVLOREM')) {
    exit('No direct script access allowed');
}
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CorporateLorem</title>
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>

<div class="container">

    <div class="menu">
        <ul>
            <li><a href="<?php echo $menu_link; ?>"><?php echo $menu_text; ?></a></li>
            <li>(Click a paragraph three times to select the text)</li>
        </ul>
    </div>

    <div class="content">
        <h1>
            <?php echo $headline; ?>
            <button onclick="window.location.href=window.location.href">
                <span>Reload</span>
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAACAVBMVEUAAABndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKBndKDhZvsyAAAAqnRSTlMAAQIDBAUGBwgJCgsMDQ4PEBESExQVFhcYGRocHR4fICIjJCUmJygpKissLS4vMDM0NTY3ODo7PD0+P0FCQ0RFRkdJS0xNTk9RUlRVVldZW1xfYWJjZGdoaW1vcHFzdHd4eXt+f4CChYaIiYuMj5GSlJWYmpudnqCio6WmqKqrrbCytLW3uby+wMHDxcfIyszOz9HT1dfZ2tze4OLk5ujp6+3v8fP19/n7/TdL5IIAAAUeSURBVBgZxcGJXxRlAAbgd3ZhWMQDwYNUVJQKQ9pEMrPEvMrUDE1EEwtF0kw/ZUUrSyDKyIsKPBBjYUBh9/0r0998swfM7s7OsfM8cEiBz74Lw1+CERV+EqQWho8EX4mo8I3ga1oYfhHURVT4Q1DSwvCFYEJEhQ8Ek7QwCk8wVURFoQmm0cIoMME5IioKSnAuLYxCEpwvoqJwBE1oYRSMoKmIigIRNKeFURiCmURUeElZsKZuy459R4aZkRaGN9S61p4ntCKiwm3Bzd88onVaGG5Sai/HmKeICreUtU/TBi0MVyz9gXZFVDhW2UMHtDCcCbbToYgKB8JRZjD99IFGS7R62FXSy3nifV9tqy5T8IqgJR1FsKlmknPc3l+lIEHQgv4K2HWU6f5qLkEawZzGGmBXUR/TdC3BXII5xFoCsCs0zBSzX5diPsHsukth25LnTHE1BDOC2QythX1VU0waWQ9zgplNNcOB1bNMalWQgWBGHUVwoOIFEyY3IiPBDPor4MSCcSb8HkJmgqbGGuCI+pgJlxRkIWgi1hKAI8o9JpxGVoLzdZfCofNM+ALZCc41tBZObWXCZ8hBMN1UMxxbPEPDCeQimKajCI4pQzR0ISfBFP0VcEELDTeRm2DCWAPcUBajNBpEboJSrCUAV9yiFF8BCwR13aVwRwMNe2GF4GtDa+ES5Rml27BEkJxqhmsaKcUXwRJBdhTBPcOUjsEa0V8BF22iNBqANZVw1V1KTfDFMkrPFfjiBKVd8EeUOi0AX1RTOgF/nKO0DP6IUvcI/iijdBj+eI9SBfxxjroZ+GSUupvwR5DSPvijnNIq+KOWUgn8sZu6OHxyhrq/4ZMIdQI+6aWuHT4ZpO44fDJC3SH4JErdHvgkRt2H8M76DbpSmNCo2wXvUGqEiSfUHYBnFErvwMQ96o7CMwFKNTDRT90peKaY0iqYuEndBXimjNIymDhP3Z/wzFpKC2Dic+pewjMfUFJgooFSMbzSSt0TmFlOqRJe6aauB2aKKW2DVyaoa4OpKeouwiMLKb0PU1epi8IjjZTKYWonpTJ4o5O6aZirpLQd3hin7hoymKFuAJ5YQ6kZGUQolcILZylVIIN3Ke2HB5QX1I0gk8AsdcPwwGZKB5HRRUpvw333KS1ERjWUBuG6GkqDyEz5j1I13DZAaTuy2ENpAC5bRymqIIvAFKVGuEr5l9J+ZHWYUjQINx2gNB1AVkUzlM7ARaWzlL5EDodpqIZ7blOaCCIHZYTSuAq3tNCwFTmtp6EXLllHQz8sEDQcgytKojSUw4KSaRp2wAXBhzS0wpI6JtTBMWWAhjsKrDlFQ2w1nLpBw1QIFil3aHhZDUeUa0x4E5aFNBpi9XAg0MeENuShapYJH8G24rtMuIa81DKpDTZVPmZCr4L8NDFpoAR27Iwx4W4A+fqUSZMbkbfAFSY9Kkb+9jHFhWLkp36MSQ9V2NHIFNMfIw8LbzHFQBD2bJhhivubYFHoVJwpbiiwa+UEU400Kcht8Xmm6YIDJf1MM95aiayCW35hmtntcKaVc4wcXKnAXKjhSozphpfCqQ2TnCvee2jjkiBShaqaOp9xnssBOFfUSVOTv13/vuPk8dNd4qd/4jTz9C24440HtCF+TIFrdk8yXz8ugpsCzWPMh6iE25SmYVoU71wETyw/OcHcercG4Z11344yi9ivn4TgtVD96YdxzjfZs3eFgkIJrWo80t519ec/BvuuXzrbtru2PAh7/gdVO60WZP+a6AAAAABJRU5ErkJggg=="
                    alt="Reload">
            </button>
        </h1>
        <?php echo(empty($content) ? 'Sorry, an error occurred!' : $content); ?>
    </div>

    <div class="footer">
        A Project by <a href="https://kovah.de">Kovah.de</a> | Also available <a href="https://devlorem.kovah.de">online</a> and
        <a href="#api" id="api-toggle">via API</a> | <a href="https://devlorem.kovah.de">Why so serious?</a> |
        <a href="https://github.com/Kovah/DevLorem">Contribute</a>
    </div>

    <div id="api" class="footer" style="display: none;">
        <p>Required URL structure:<br/>
            <code><?php echo ($_SERVER["HTTP_HOST"] != "" ? $_SERVER["HTTP_HOST"] : 'domain.com'); ?>/api/[int][/p][/json]</code></p>
        <ul>
            <li>[int] = optional, number of paragraphs you want</li>
            <li>[/p] = optional, select if the <code>&lt;p&gt;</code> tags should be included</li>
            <li>[/json] = optional, output the data in JSON format</li>
        </ul>
    </div>

</div>

<script>
    document.getElementById("api-toggle").addEventListener("click", function (e) {
		e.preventDefault();
        if (document.getElementById("api").style.display === "block") {
            document.getElementById("api").style.display = "none";
        } else {
            document.getElementById("api").style.display = "block";
        }
    })
</script>

</body>
</html>
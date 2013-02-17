Gogo
====

Gogo is a simple library that makes throwing together a quick theme a little quicker. Or at least that's what I think about it. You may find it trivial and useless.

#### Example Usage

    Loader::helper('go')->go(array(
        '<!DOCTYPE HTML>',
        '<html lang="en">',
        'head',
        '<body>',
        '<div id="wrapper">',
        'header',
        'full',
        '</div><!-- #wrapper -->',
        '</body>',
        '</html>'
    ));

What happens here is that anything that starts with a `<` will be outputed as text and anything that isn't will be included with a `$view->inc("elements/$el.php");`. Yup, that's it. It's simple, but I find it makes for much cleaner elements and much DRYer themes. Especially, when earlier on in the prototyping stage where parts of a theme are being swapped out and changed.

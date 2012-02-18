# easybook LaTeX demo #

This is a test book showing how easybook can produce a LaTeX-like book.
Although it cannot reproduce the typesetting perfection of LaTeX, the
result is a high-quality book.

The customizations needed to make easybook seem LaTeX were the following:

  * Use a custom `cover.twig` template to include the usual information
    of the thesis covers made with LaTeX.
  * Use a custom `lof.twig` to slightly tweak the `list of figures` page.
  * Define a new CSS stylesheet to match LaTeX font sizes and margins.
  * In the `config.yml` the PDF book was configured as single page. with
    larger margins and no code highlighting.
  * Use custom fonts to match LaTeX ones (see their licenses in the
    LICENSE.md file)
  * Define custom labels and titles to match LaTeX section headings.

If you don't have PrinceXML library, you can see the published book in the
`Expected/print/` folder.
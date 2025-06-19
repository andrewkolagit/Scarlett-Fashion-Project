# Scarlett-Fashion-Project
Website made with HTML, CSS, and PHP, connected to a database

## Product Pages

Individual product pages have been consolidated into a single reusable template.
Data for all items now lives in `Each Product File/products.json` and can be
loaded by `Each Product File/product.html` by passing `?category=<group>&id=<id>`
in the URL. This reduces duplication and makes it easier to manage products.

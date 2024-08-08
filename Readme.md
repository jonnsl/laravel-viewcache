# view:cache

Compile all blade views in advance.

In a Laravel application, Blade templates are compiled into plain PHP code the first time they are used and are then cached until they are modified. This means that the directory that stores the cached template (usually storage/framework/views) must be writeable by the server. During development this is not a problem at all, actually this is quite convenient. In a production environment however, this poses a security concern, since now there is a directory that is both writeable and will have php files that are executable.

Using this `artisan view:cache` command in a build step before uploading your application to production, the storage/framework/view and the php files inside can be made read-only. This helps to prevent unauthorized modifications to the cached view files, reducing the risk of potential security vulnerabilities that could arise from a writable directory containing executable PHP code. Also by compiling the Blade templates ahead of time, the application can serve the cached views a little bit faster the first time, as it doesn't need to compile the templates on-the-fly on the first request.

Blade template files must use the .blade.php file extension and are typically stored in the resources/views directory (the directory can be changed in config/view.php).

## Installation

```bash
$ composer require jonnsl/laravel-viewcache
```

## Usage

```
Usage: php artisan view:cache

Options:

  --force Compile all views regardless of their timestamp.
```

## License

(The MIT License)

Copyright (c) 2024 Jonnathan Soares Lima &lt;jonnsl@hotmail.com&gt;

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

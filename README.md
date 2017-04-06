# Identicon generator for Laravel

> From the [yzalis/Identicon](https://github.com/yzalis/Identicon)



**Laricon** is a library which generate an [identicon](http://en.wikipedia.org/wiki/Identicon) image based on a string.

Here is some examples of awesome results!

![Identicon example #1](doc/benjaminAtYzalisDotCom.png)&nbsp;&nbsp;
![Identicon example #2](doc/Benjamin.png)&nbsp;&nbsp;
![Identicon example #3](doc/8.8.8.8.png)&nbsp;&nbsp;
![Identicon example #4](doc/8.8.4.4.png)&nbsp;&nbsp;
![Identicon example #5](doc/yzalis.png)

## Usage

Images are generated in PNG format with transparent background.

The string can be an email, an IP address, a username, an ID or something else.

### Generate an identicon

Add in the `config/app.php` file

``` php
'providers' => [
    ....
    Vikin\Laricon\Providers\LariconServiceProvider::class
],

'aliases' => [
    ....
    'Laricon' => Vikin\Laricon\Facades\Laricon::class
]
```

Then you can generate and display an identicon image

``` php
Laricon::displayImage('vikin');
```

or generate and get the image data

``` php
Laricon::getImageData('vikin');
```

or generate and get the base 64 image uri ready for integrate into an HTML img tag.

``` php
Laricon::getImageDataUri('vikin');
```
``` html
<img src="{{ Laricon::getImageDataUri('vikin') }}" alt="Vikin Identicon" />
```


### Change the size

By default the size will be 64 pixels. If you want to change the image size just add a secondary parameter. 512 x 512px in this example.

``` php
Laricon::displayImage('vikin', 512);
```

### Color

The color is automatically generated according to the string hash but you can chose to specify a color by adding a third argument.

Color can be an hexadecimal with 6 characters

``` php
Laricon::displayImage('vikin', 64, 'A87EDF');
```

or an array with red, green, blue value

``` php
Laricon::displayImage('foo', 64, [200, 100, 150]);
```

That's it!

## License

Identicon is released under the MIT License. See the bundled LICENSE file for details.
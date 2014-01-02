#  Habari [Hyde](http://andhyde.com)

An elegant open source, mobile first theme originally designed for  [Jekyll](https://github.com/mojombo/jekyll) and ported to [Habari](http://habariproject.org). It includes lightweight styles and placeholder content to get you up and running with a simple blog in no time.

![Hyde screenshot](https://f.cloud.github.com/assets/98681/1818325/da6489d8-6ff5-11e3-9b4f-c56b92013e9a.png)


## Options

Hyde includes a few options, typically applied via classes on the `<body>` element.

### Themes

As of v1.1, Hyde ships with optional themes based on the [base16 color scheme](https://github.com/chriskempson/base16). In Hyde, a theme simply changes the sidebar's background color and the color of links within blog posts. Here's the red theme in action:

![Hyde in red](https://f.cloud.github.com/assets/98681/1818326/da64f56c-6ff5-11e3-9643-7d0c18157dec.png)

There are eight themes available at this time.

![Hyde theme classes](https://f.cloud.github.com/assets/98681/1817044/e5b0ec06-6f68-11e3-83d7-acd1942797a1.png)

To use a theme, add anyone of the available theme classes to the `<body>` element like so:

```html
<body class="theme-base-08">
  ...
</body>
```

To create your own theme, look to the Themes section of [Hyde's CSS](https://github.com/mdo/hyde/blob/master/public/css/hyde.css). Copy any existing theme (they're only a few lines of CSS), rename it, and change the provided colors.

### Reverse layout

![Hyde with reverse layout](https://f.cloud.github.com/assets/98681/1818324/da6473f8-6ff5-11e3-9315-692e639fb5c7.png)

Hyde's page orientation can be reversed with a single class.

```html
<body class="layout-reverse">
  ...
</body>
```


## Author

**Mark Otto**
<https://github.com/mdo>
<https://twitter.com/mdo>

Ported by:
**Michael Bishop**
<https://github.com/miklb>
<https://twitter.com/miklb>

## License

Open sourced under the [MIT license](LICENSE.md).

<3

## Habari Notes

Hyde currently supports 2 block areas:

* Colophon - the area below the Title and tagline. Best suited for navigation using the Menus plugin and block.
* Post Footer - the area directly below the post on single post view. Example content could be a Related Posts plugin. Custom CSS may need to be applied for other types of content.

The best way to customize your theme would be to create a [child theme](http://wiki.habariproject.org/en/Parent_and_Child_Themes) and apply your changes to the necessary files. So if you wanted to have the reverse layout and a different color, you could create your own header.php file in the child theme directory and add your body classes. Obviously you could modify the parent theme, but that would prevent from easily updating. Future versions may provide built in theme options if there were interest. Feel free to open an [issue](https://github.com/miklb/Habari_Hyde/issues) for feature requests and bugs.

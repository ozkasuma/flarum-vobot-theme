# VObot Challenge Flarum Theme

A custom Flarum theme inspired by the VObot Challenge website, featuring a navy blue and orange color scheme with clean, modern styling optimized for educational and robotics communities.

![VObot Theme Preview](https://via.placeholder.com/800x400?text=VObot+Theme+Preview)

## Features

- **VObot-Inspired Color Scheme**: Navy blue (#0b2a4a), Orange (#e85d11), Light blue (#e6f2fa)
- **Modern Design Elements**: Clean layouts, card-based discussions, and distinctive accent elements
- **Responsive Design**: Optimized for all devices from mobile to desktop
- **Custom Components**: Styled navigation, discussion lists, posts, and sidebar
- **Easy Customization**: Well-organized LESS variables for simple personalization

## Installation

### Prerequisites

- Flarum v1.0.0 or higher
- Composer installed on your server
- FTP access or file access to your server


### Step 1: Install the Extension

In your Flarum root directory, run:

```bash
composer require ozkasuma/flarum-vobot-theme:*@dev
```

### Step 2: Activate the Theme

1. Log in to your Flarum admin panel
2. Navigate to the Extensions tab
3. Find "VObot Challenge Theme" and enable it

## Customization

### Color Scheme

The main colors can be easily adjusted in the `less/forum.less` file:

```less
// Define your theme variables
@primary-color: #0b2a4a;    // Navy blue
@secondary-color: #e85d11;   // Orange
@body-bg: #fff;              // White background
@text-color: #333;           // Dark text
@link-color: @secondary-color;
@header-bg: @primary-color;
@header-color: #fff;
```

### Custom Components

The theme includes several VObot-specific components that you can add to your forum:

#### VObot Info Box

```html
<div class="VObot-infoBox">
  <h3>VObot Challenge 2025</h3>
  <p>Registration is now open for the next competition!</p>
</div>
```

#### VObot Announcement

```html
<div class="VObot-announcement">
  <h3>Important Notice</h3>
  <p>The next workshop will be held on June 15th, 2025.</p>
</div>
```

### Typography

The theme uses the Montserrat font family. To change this, modify the font import and variables in `forum.less`:

```less
@import url('https://fonts.googleapis.com/css2?family=YourFont:wght@400;500;600;700&display=swap');

@font-family-base: 'YourFont', -apple-system, BlinkMacSystemFont, sans-serif;
```

## Directory Structure

```
vobot-theme/
├── composer.json
├── extend.php
├── LICENSE
├── README.md
└── less/
    ├── forum.less
    └── admin.less
```

## For Developers

### CSS Structure

The theme's CSS is organized as follows:

1. **Variables**: Color and typography definitions
2. **Global Styles**: Base styling for common elements
3. **Components**: Specific styling for Flarum components (Header, DiscussionList, Post, etc.)
4. **Custom Components**: VObot-specific components
5. **Responsive Adjustments**: Media queries for different screen sizes

### Adding Custom JavaScript

If you need to add custom JavaScript functionality:

1. Create a `js` directory in your theme folder
2. Add your JS files
3. Update `extend.php` to include your JS:

```php
(new Extend\Frontend('forum'))
    ->css(__DIR__.'/less/forum.less')
    ->js(__DIR__.'/js/forum.js'),
```

## Troubleshooting

- **Theme not appearing**: Clear the Flarum cache with `php flarum cache:clear`
- **CSS not updating**: Hard refresh your browser with Ctrl+F5
- **Composer errors**: Verify your composer.json file is correctly formatted

## Credits

- Inspired by the [VObot Challenge](https://vobot-challenge.example.com/) website
- Built for the Flarum forum platform

## License

This theme is released under the MIT License. See the LICENSE file for details.

## Support

For issues, questions, or contributions, please open an issue in the GitHub repository or contact the theme developer.

---

Made with ❤️ for the VObot community

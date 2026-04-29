# First Website - Creative Agency WordPress Theme

A professional, modern WordPress theme designed for creative agencies, event production companies, and portfolio sites. Perfect for showcasing projects, services, and building a strong online presence.

## Features

✨ **Professional Design**
- Modern dark theme with gold accents
- Responsive grid layouts
- Smooth animations and transitions
- Mobile-friendly hamburger menu

📱 **Responsive Layout**
- Works perfectly on mobile, tablet, and desktop
- Flexible grid system
- Touch-friendly navigation

🎨 **Customizable**
- Easy color customization via CSS variables
- Customizable fonts and typography
- Simple structure for modifications

📝 **Content Management**
- Custom "Projects" post type with categories
- Custom "Services" post type
- Standard blog/posts support
- Featured images for all content types

🚀 **SEO & Performance**
- Clean, semantic HTML
- Mobile-optimized
- Fast loading times
- Proper heading hierarchy

## Theme Structure

```
wp-content/themes/firstwebsite/
├── style.css              # Main stylesheet
├── functions.php          # Theme setup and custom post types
├── header.php             # Header template
├── footer.php             # Footer template
├── front-page.php         # Homepage template
├── index.php              # Blog/posts listing
├── archive-project.php    # Projects listing
├── single-project.php     # Single project page
├── archive-service.php    # Services listing
├── js/
│   └── script.js          # Interactive features
└── README.md              # This file
```

## Installation

1. Upload the theme folder to `wp-content/themes/`
2. Activate the theme in WordPress Admin
3. Create menu items if needed
4. Start adding projects and services

## Usage

### Adding Projects

1. Go to WordPress Admin → Projects → Add New
2. Fill in the title and description
3. Upload a featured image
4. Assign a project category
5. Publish

### Adding Services

1. Go to WordPress Admin → Services → Add New
2. Fill in the service name and description
3. Upload a featured image
4. Publish

### Customizing Colors

Edit `style.css` and modify the CSS variables at the top:

```css
:root {
    --primary-gold: #d4af37;
    --dark-bg: #1a1a1a;
    --light-text: #ffffff;
    --gray-text: #cccccc;
    --gray-light: #f5f5f5;
    --border-color: #333333;
}
```

## Requirements

- WordPress 5.0 or higher
- PHP 7.2 or higher

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

GPL v2 or later

## Author

Kareemkhf

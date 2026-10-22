
# EmberPress

**A lightweight classic WordPress theme for writers and independent publishers.**

EmberPress is a custom-built WordPress theme developed as a portfolio project to demonstrate practical WordPress theme development, PHP, HTML, CSS, accessibility, and WordPress coding standards.

The theme provides a clean, responsive foundation for content-focused websites using native WordPress functionality without requiring a page builder.

> **Copyright Notice:** EmberPress is proprietary portfolio work. All rights reserved. Access is provided for recruiter and potential employer evaluation only. See the [LICENSE](LICENSE) file for the applicable terms.

## Project Overview

- **Project:** EmberPress
- **Type:** Classic WordPress theme
- **Version:** 1.0.0
- **Author:** Samiullah Popalzai
- **Requires WordPress:** 6.0 or later
- **Requires PHP:** 8.0 or later

## Features

### Content and Templates

- WordPress-native post loops and template hierarchy.
- Dedicated front-page template.
- Single post and static page layouts.
- Featured images, post titles, excerpts, publication dates, and categories.
- Read More links on the front page.
- Category, tag, author, date, and general archive templates.
- Search results and a custom search form.
- Pagination for supported post listings.
- Custom 404 page.
- WordPress comments and comment form support.

### Navigation and Accessibility

- Primary navigation menu support.
- Skip-to-content link.
- Screen-reader utility styles.
- Keyboard focus indicators.
- Semantic HTML elements and accessible navigation labels.
- Alternative text support for featured images.

### Design and Performance

- Responsive layouts for desktop, tablet, and mobile devices.
- Custom CSS with a consistent color palette and typography.
- Article cards with spacing, borders, and subtle shadows.
- Styled post metadata and Read More links.
- Lightweight styling without a required CSS framework.
- WordPress-native stylesheet enqueueing.

### WordPress Integration

- WordPress document title support.
- Featured image support.
- HTML5 markup support for comments and search forms.
- Translation-ready strings using the `emberpress` text domain.
- WordPress hooks including `wp_head()`, `wp_footer()`, and `wp_body_open()`.
- Output escaping in key template areas.

## Technology Stack

- **PHP** — WordPress theme logic and templates.
- **HTML5** — Semantic page structure.
- **CSS3** — Responsive design and visual styling.
- **WordPress** — Content management, template hierarchy, navigation, search, and comments.
- **Git** — Source control and development history.

## Installation

### Local Installation with XAMPP

1. Copy the `emberpress` directory into your WordPress installation:

   `wp-content/themes/emberpress/`

2. Start Apache and MySQL through the XAMPP Control Panel.
3. Open your WordPress website in a browser.
4. Navigate to **Appearance → Themes**.
5. Activate EmberPress.

### Configure the Theme

After activation:

1. Set your website title and tagline.
2. Create posts and assign categories.
3. Set featured images for posts.
4. Create a navigation menu and assign it to the **Primary Menu** location.
5. Review the homepage, individual posts, archives, search results, and comments.

## Theme Structure

```text
emberpress/
├── 404.php
├── archive.php
├── author.php
├── category.php
├── comments.php
├── date.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── LICENSE
├── page.php
├── README.md
├── search.php
├── searchform.php
├── single.php
├── style.css
└── tag.php
```

## Customization

### Styling

Edit `style.css` to adjust colors, typography, spacing, navigation, article cards, and responsive behavior.

Preserve the theme metadata comment at the top of the stylesheet.

### Navigation

Create a menu in the WordPress dashboard and assign it to the theme's **Primary Menu** location.

### Posts and Featured Images

Create posts through the WordPress dashboard. Add excerpts, publication content, categories, and featured images to make full use of the theme's article listings.

### Theme Functions

The `functions.php` file contains theme setup, supported features, menu registration, and stylesheet loading.

## Development and Testing

EmberPress has been manually tested for:

- Homepage and post display.
- Featured-image and Read More navigation.
- Search functionality.
- Category and archive navigation.
- Comments functionality.
- 404 handling.
- Mobile responsiveness.
- WordPress Theme Check.

**Theme Check result:** No errors were reported during the project's validation.

Testing was performed in a local development environment. Additional cross-browser testing, accessibility audits, security reviews, and production testing are recommended before deployment to a live website.

## Project Scope

EmberPress is a classic PHP-based WordPress theme intended to demonstrate foundational theme development skills.

The current scope does not include:

- Full Site Editing or a custom block theme.
- A custom theme options panel.
- WooCommerce-specific templates and styling.
- A custom page builder.
- A dedicated build pipeline or automated test suite.

These capabilities may be considered for future versions.

## Author

**Samiullah Popalzai**

Full Stack Engineer & WordPress Developer

- **Portfolio:** https://samiullah-popalzai.github.io/
- **GitHub:** https://github.com/Samiullah-Popalzai/
- **LinkedIn:** https://linkedin.com/in/samiullah-popalzai/

## Copyright and License

Copyright © 2026 Samiullah Popalzai. All rights reserved.

EmberPress is proprietary portfolio work made available for review and evaluation by recruiters and potential employers.

Viewing this project does not grant permission to copy, modify, redistribute, publish, sublicense, sell, or use the theme or any portion of its source code for other purposes without prior written permission from the copyright holder.

See the [LICENSE](LICENSE) file for the full terms.

**This project is not offered under the GNU General Public License or another open-source license.**

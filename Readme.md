# Drupal Single Directory Components Example

This repository contains a Drupal project demonstrating the implementation of Single Directory Components (SDC) in a custom theme.

## About

This project showcases how to build and organize reusable UI components using Drupal's Single Directory Components (SDC) specification. SDC allows developers to create self-contained, reusable components with all related assets (Twig templates, CSS, JavaScript, and documentation) in a single directory.

## Requirements

- PHP 8.1 or higher
- Composer
- Drupal 10.x
- DDEV (for local development)

## Installation

1. Clone this repository:
```bash
git clone [repository-url]
```

2. Start DDEV:
```bash
ddev start
```

3. Install dependencies:
```bash
ddev composer install
```

4. Install Drupal using the standard profile:
```bash
ddev drush site:install --account-name=admin --account-pass=admin -y
```

## Theme Development

The custom theme implementing SDC components can be found in the `web/themes/custom` directory. Each component follows the SDC specification with the following structure:

```
component-name/
├── component-name.css
├── component-name.js
├── component-name.twig
├── component-name.yml
└── component-name.theme.inc
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Submit a pull request

## License

This project is licensed under the GNU General Public License v2.0 or later.


https://tinyurl.com/2964c2s2

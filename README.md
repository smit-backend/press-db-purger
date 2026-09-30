# DBCleaner Core: Database Query & Storage Optimizer

[![GitHub License](https://img.shields.io/github/license/smit-backend/press-db-purger?style=flat-square)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/smit-backend/press-db-purger?style=flat-square)](https://github.com/smit-backend/press-db-purger/stargazers)
[![GitHub Issues](https://img.shields.io/github/issues/smit-backend/press-db-purger?style=flat-square)](https://github.com/smit-backend/press-db-purger/issues)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square&logo=php)](https://php.net)

> **High-performance database optimization plugin to index tables, purge orphaned metadata/revisions, and reduce overhead.**

---

## 🚀 Key Highlights & Features

- **Production-Grade Architecture:** Designed specifically with decoupled, testable interfaces.
- **Enterprise Resiliency:** Built-in safeguards, structured exception handling, and observability.
- **Zero-Friction Setup:** Configurable via sensible defaults or deep environment customization.
- **Strictly Typed:** Complete type declarations compatible with PHP 8.2+ and modern standards.

---

## 🛠️ Architecture & Flow

```mermaid
graph TD
    Client[Incoming Request / Trigger] --> Gate[Input Validator & Security Guard]
    Gate --> CoreEngine[DBCleaner Core: Database Query & Storage Optimizer]
    CoreEngine --> Adapter[External Storage / Cloud / DB]
    CoreEngine --> Observer[Telemetry & Audit Logger]
```

---

## 📦 Installation & Setup

### Requirements
- **PHP:** `^8.2`
- **Composer:** Modern Composer v2+

### Installation via Composer
```bash
composer require smit-backend/press-db-purger
```

---

## ⚙️ Configuration & Quick Start

Publish configuration and default assets:
```bash
php artisan vendor:publish --tag="press-db-purger-config"
```

Sample configuration excerpt (`config/press-db-purger.php`):
```php
return [
    'enabled' => env('PRESS_DB_PURGER_ENABLED', true),
    'log_channel' => env('PRESS_DB_PURGER_LOG', 'stack'),
];
```

---

## 🧪 Testing

Run test suites locally:
```bash
composer test
```

---

## 🛡️ Security & Contributing

If you discover any security-related issues, please open an issue or email directly via GitHub. Contributions via pull requests are always welcome!

---

## 📄 License

This package is open-sourced software licensed under the [MIT License](LICENSE).

Developed and maintained with ❤️ by **[smit-backend](https://github.com/smit-backend)**.

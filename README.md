# 🏫 School Directory Platform (دليل المدارس)

A modern Laravel-based web application to manage and showcase schools. The platform enables parents to explore, compare, and interact with schools based on features, location, reviews, and more.

## 🔧 Features

- 👤 Multi-role system (Admin, Schools, Parents)
- 🏫 School management with location & image uploads
- ⭐ School features (library, labs, activities, etc.)
- 🗳️ Voting and recommendation system
- 🆚 School comparison (fees, activities, location)
- 📍 Google Maps integration
- 📅 Booking system with Zoom integration
- 💳 Subscription/payment system (Stripe or PayPal)
- 📡 RESTful API for mobile/app integration
- 📰 CMS for blog and content
- 🔒 Role-based access and policies
- 🌐 Multi-language support (Arabic ready)

## 📁 Project Structure


## 🚧 Development Plan

1. ✅ Authentication (multi-role)
2. ✅ School Management (CRUD + location)
3. ✅ School Features
4. ✅ Voting & Recommendation
5. ✅ School Comparison
6. ✅ Booking System + Zoom
7. ✅ Google Maps
8. ✅ Payments Integration
9. ✅ Public API
10. ✅ Deployment + Documentation

## 🚀 Deployment

Use GitHub + Laravel Forge or VPS:
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

---

## ✅ 2. ملفات البداية و `.gitignore`

### 📄 `.gitignore`
```gitignore
/vendor
/node_modules
/public/uploads
.env
.DS_Store
.idea
/storage/*.key
/storage/app/public/*
/bootstrap/cache/*

# Smart AgroTourism Kabupaten Solok
Prototype aplikasi Laravel + PostgreSQL/PostGIS + MQTT + AI Python.

## Modul
- Dashboard pemerintah
- WebGIS lahan, sensor, dan destinasi
- CRUD lahan pertanian
- Monitoring perangkat IoT
- Telemetri sensor
- Smart irrigation
- Destinasi & paket wisata
- Booking wisata
- REST API IoT
- AI prediction dasar

## Instalasi
1. Buat project Laravel baru: `composer create-project laravel/laravel .`
2. Salin folder/file paket ini ke root project Laravel.
3. `composer install`
4. Atur `.env` PostgreSQL/PostGIS.
5. `php artisan key:generate`
6. `php artisan migrate --seed`
7. `php artisan serve`

## Database
PostgreSQL + PostGIS direkomendasikan. Jalankan `CREATE EXTENSION postgis;` pada database.

## IoT
Upload `iot/esp32_smart_agrotourism.ino` ke ESP32. Sesuaikan WiFi, URL API, dan device code.

## AI
`python ai/predict.py` adalah baseline prediksi sederhana; ganti model dengan dataset lapangan untuk produksi.

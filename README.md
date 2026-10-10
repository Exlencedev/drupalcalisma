# Drupal Çalışma

Drupal 11 ile çoklu dil (Türkçe / İngilizce) çalışması. Drupal 6'da yaptıklarımı yeni Drupal'de yeniden deniyorum.

## Kurulum
```bash
git clone https://github.com/Exlencedev/drupalcalisma.git
cd drupalcalisma
ddev start
ddev composer install
echo "\$settings['config_sync_directory'] = '../config/sync';" >> web/sites/default/settings.php
ddev drush site:install --existing-config --account-name=admin --account-pass=admin -y
ddev launch
```
Not: Haber içerikleri değil, yapılandırma (diller, içerik türü, view, menü) yüklenir.

## Yapılanlar
- [x] Drupal 11 + DDEV kurulumu
- [x] Çoklu dil: Türkçe ve İngilizce, URL öneki (`/en`, `/tr`), dil değiştirici bloğu
- [x] `Haber` içerik türü, İngilizce/Türkçe çeviri
- [x] Menü ve taksonomi çevirisi
- [x] Özel modül
- [x] Views

# Drupal Çalışma

Drupal 11 ile çoklu dil (Türkçe / İngilizce) çalışması. Drupal 6'da yaptıklarımı yeni Drupal'de yeniden deniyorum.

## Kurulum
```bash
git clone https://github.com/Exlencedev/drupalcalisma.git
cd drupalcalisma
ddev start
ddev composer install
ddev drush site:install --existing-config --account-name=admin --account-pass=admin -y
```
(Bu komut `config/sync` içindeki yapılandırmayı yükler. Çalışmazsa: `ddev drush site:install -y`, sonra `ddev drush config:import --source=../config/sync -y`.)

## Yapılanlar
- [x] Drupal 11 + DDEV kurulumu
- [x] Çoklu dil: Türkçe ve İngilizce, URL öneki (`/en`, `/tr`), dil değiştirici bloğu
- [x] `Haber` içerik türü, İngilizce/Türkçe çeviri
- [x] Menü ve taksonomi çevirisi
- [x] Özel modül
- [x] Views

# Changelog

## 3.0.2 - 2019-06-10
### Added
- Moved most of `index.twig` to `layouts/_base.twig` and now `index.twig` extends that base layout.
### Fixed
- Was using the wrong method to get the site's CSRF Token and add it to the window for JS to use. Changed `craft.app.config.general.csrfToken` to `craft.app.request.csrfToken`.

## 3.0.1 - 2019-06-10
### Fixed
- `composer.json` had an autoload.psr-4 invalid value: `"modules\\sitemodule"` needs to end with a namespace separator, i.e. `"modules\\sitemodule\\"`.

## 3.0.0 - 2019-06-10
### Changed
- Rebuilt using craft-vue-tailwind v3.0.0
- Added a base SiteModule
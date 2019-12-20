# Changelog

## 2.1.1 - 2019-11-27

### Added
- Allow selected field group to be remembered on page-loads.
- Update “New Field” button to populate the group based on the sidebar selection.

## 2.1.0 - 2019-05-11

### Added
- Add Neo support for cloning, importing and exporting.
- Add support for picking blocks and block fields for Super Table, Matrix and Neo fields when importing. This means you can choose specific fields or entire blocktypes to import, rename or exclude.
- Add field audit functionality. See what elements are using what fields, and also if there are any orphaned field layouts (field layouts that belong to an element group no longer there).
- Add translatable column to field index.
- Add option to download export JSON, or view output.

### Changed
- Now requires Craft 3.1.x.

### Fixed
- Enforce plugin to be hidden when `allowAdminChanges` is set.
- Fix some missing translations.

## 2.0.6 - 2019-05-11

### Fixed
- Fix cloning Matrix and Super Table fields, where fields weren’t getting their blocks and blocktypes correctly cloned.

## 2.0.5 - 2019-02-10

### Fixed
- Neo fields no longer clone (not supported yet).
- Fix Matrix/Super Table blocktypes not creating new field layouts.

## 2.0.4 - 2018-10-24

### Fixed
- Fix errors thrown when creating a new field

## 2.0.3 - 2018-02-25

### Fixed
- Fix Super Table parsing causing errors
- Updated field modal with the latest changes from Craft base. Helps with translation/site and field changes.

## 2.0.2 - 2018-02-25

### Changed
- Improve import support for `rias\positionfieldtype\fields\Position`
- Improve SuperTable/Matrix validation for import
- Improve Craft 2 migration of importing (caused fatal errors in some cases)
- Set minimum requirement to `^3.0.0-RC11`

## 2.0.1 - 2018-02-12

### Fixed
- Fix plugin icon in some circumstances

## 2.0.0 - 2017-12-12

### Added
- Craft 3 initial release.

## 1.5.5 - 2017-11-04

### Fixed
- Minor fix for sidebar icon.
- Fixed import issue where last group dropdown wasn't being set

## 1.5.4 - 2017-10-17

### Added
- Verbb marketing (new plugin icon, readme, etc).

### Fixed
- Fix for handle generation overriding import handle changes

## 1.5.3 - 2016-09-04

### Added
- Added import support for Smart Map, which needs a special-case.

## 1.5.2 - 2016-07-30

### Changed
- Now checks for installed fieldtypes on import/clone.
- Added auto-handle generation on mapping screen when importing.
- Now uses `fieldType->prepSettings` when cloning fields. Ensures fields are setup correctly when cloning.

### Fixed
- Fixed issue with Position Select not importing properly
- Fixed issue with Matrix / Super Table fields moving fields to new cloned fields

## 1.5.1 - 2016-07-15

### Fixed
- Fixed issue with Matrix/Super Table cloning not applying changes made on the edit screen.

## 1.5.0 - 2016-06-14

### Added
- Added clone, import/export support for Matrix > SuperTable > Matrix field configuration (phew!).

### Changed
- Changed export/import JSON structure for better consistency, readability and for Matrix/SuperTable support. Supports older exports with deprecation notice.
- Allow `metaKey` (cmd+click) functionality. Thanks to [@timkelty](https://github.com/timkelty)
- Refactored cloning logic for all fields (now much simpler)
- Better logging and UI feedback for various tasks
- Better clone, import/export support for Matrix-SuperTable combination
- Better logging and flow for import - doesn't die so much when things go wrong

### Fixed
- Fix issue for Matrix and SuperTable fields not being created properly on import/clone.
- Fix where field modals disappeared when failing validation.
- Fix for reordering dropdown fields (and other option fields) and not persisting order.
- Fix field options not updating when changing field type.

## 1.4.5 - 2016-03-15

### Fixed
- Ensure database handling methods take into account custom database names. Thanks to [@tcsehv](https://github.com/tcsehv).

## 1.4.4 - 2016-03-13

### Fixed
- Normalise all modal save/cancel/clone event handlers.

## 1.4.3 - 2016-02-21

### Added
- Create new fields directly from the Field Manager page [#16](https://github.com/verbb/field-manager/issues/16).
- Fields are shown if they are unused - handy to keep your fields clean [#16](https://github.com/verbb/field-manager/issues/16).

### Fixed
- Fixed issue when cloning Matrix field and not carrying over instructions [#17](https://github.com/verbb/field-manager/issues/17).
- Instructions were missing when importing/exporting Matrix & Super Table field.
- Additional fixes for Matrix/Super Table nested cloning and importing.

## 1.4.2 - 2016-01-13

### Fixed
- Fixed issue with plugin release feed url.

## 1.4.1 - 2015-12-27

### Fixed
- Better support for SuperTable cloning [#13](https://github.com/verbb/field-manager/issues/13).
- Fixed issue with Matrix and SuperTable fields not properly setting their content columns after import.

## 1.4.0 - 2015-12-02

### Added
- Craft 2.5 support, including release feed and icons.

## 1.3.5 - 2015-12-02

### Fixed
- Fixed import/export issue with Position Select field - [#9](https://github.com/verbb/field-manager/issues/9).

## 1.3.4 - 2015-12-02

### Changed
- Fully support import/export Matrix-in-SuperTable and SuperTable-in-Matrix.
- Refactor import/export services.

## 1.3.3 - 2015-12-02

### Added
- Added support for [SuperTable](https://github.com/engram-design/SuperTable).

### Fixed
- Fix for 'Show in CP Nav' setting - [#5](https://github.com/verbb/field-manager/issues/5).
- Fix when exporting Matrix fields, field settings weren't getting exported - [#6](https://github.com/verbb/field-manager/issues/6).
- Minor cosmetic fixes.

## 1.3.2 - 2015-12-02

### Added
- Added support for exporting Matrix fields.

## 1.3.1 - 2015-12-02

### Added
- Added full-featured import mapping. Allows changing of field name, handle and group assignment for each field for import.

## 1.3.0 - 2015-12-02

### Added
- Added import/exporting of fields.

## 1.2.0 - 2015-12-02

### Changed
- Edit fields or field groups directly from the FieldManager screen. Just click the blue links on the left-hand side of the table.
- Better error-handling for `saveField()`
- Swapped HUD for Modal when cloning single field. Allows editing of all field settings/properties, not just group, name and handle.

## 1.1.0 - 2015-12-02

### Added
- Added an option to provide a `prefix` to be used for all fields handle value when cloning group. This is because field handles need to be unique!

## 1.0.0 - 2015-12-02

- Initial release.

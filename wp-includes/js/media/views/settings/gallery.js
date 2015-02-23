/**
 * wp.media.view.Settings.Gallery
 *
 * @class
 * @augments wp.media.view.Settings
 * @augments wp.media.View
 * @augments wp.Backbone.View
 * @augments Backbone.View
 */
var Settings = require( '../settings.js' ),
	Gallery;

Gallery = Settings.extend({
	className: 'collection-settings gallery_temp-settings',
	template:  wp.template('gallery_temp-settings')
});

module.exports = Gallery;

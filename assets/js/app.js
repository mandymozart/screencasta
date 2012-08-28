/* Main App */

/** @namespace */
var Containa = {
    Models: {},
    Collections: {},
    Views: {},
    app: null
};

Containa.app = new Backbone.Marionette.Application();

/**
 * @class Containa.Models.Release
 * @extends Backbone.Model
 */
Containa.Models.Release = Backbone.Model.extend(
/** @lends Containa.Models.Release */
    {
        idAttribute: "containaId"
    }
);

/**
 * @class Containa.Collections.Releases
 * @extends Backbone.Collection
 */
Containa.Collections.Releases = Backbone.Collection.extend(
/** @lends Containa.Collections.Releases */
    {
        model: Containa.Models.Release,
        url: "/screencasta.containa.hanahanako.com/application/getReleases.php"
    }
);

/**
 * @class Containa.Views.ReleaseListView
 * @extends Backbone.View
 */
Containa.Views.ReleaseListView = Backbone.View.extend(
/** @lends Containa.Views.ReleaseListView */
    {
        el: "#folderView",

        events: {
            "click .detailsLink": "showDetails"
        },

        /** @type Containa.Collections.Releases */
        releases: null,

        initialize: function () {
            _.bindAll(this);

            var that = this;
            this.template = Handlebars.compile($('#releaseListTemplate').html());
            this.releases = this.options.releases;
            this.releases.on("reset add remove", this.render);
        },

        showDetails: function (ev) {
            var $ev = $(ev.currentTarget);
            ev.preventDefault();

            var id = $ev.data("id");
            var release = this.releases.get(id);
            if (release != null) {
                Containa.app.vent.trigger("containa:showDetails", release);
            } else {
                alert("no such release " + id);
            }
        },

        render: function () {
            this.$el.html(this.template({
                releases: this.releases.toJSON()
            }));
            this.delegateEvents();
        }
    }
);

Containa.Views.ReleaseDetailView = Backbone.View.extend(
    {
        el: "#detailsView",

        events: {

        },

        /** @type Containa.Models.Release */
        release: null,

        initialize: function () {
            _.bindAll(this);
            Containa.app.vent.on("containa:showDetails", this.showDetails);
            this.template = Handlebars.compile($('#detailsTemplate').html());
        },

        showDetails: function (release) {
            this.release = release;
            this.render();
        },

        render: function () {
            this.$el.html(this.template(this.release.toJSON()));
            this.delegateEvents();
        }
    }
);

Containa.Views.ReleaseReaderView = Backbone.View.extend(
    {
        el: ".reader-body"
    }
);

Handlebars.registerPartial("social", $("#socialPartial").html());
var containaTemplate = Handlebars.compile($('#containaTemplate').html());
Handlebars.registerPartial("header", $("#headerPartial").html());

var releases = new Containa.Collections.Releases();

var releaseListView = new Containa.Views.ReleaseListView({ releases: releases});
var releaseDetailView = new Containa.Views.ReleaseDetailView();
var releaseReaderView = new Containa.Views.ReleaseReaderView();

// Loading once DOM is ready
$(document).ready( function() {
    releases.fetch();
});

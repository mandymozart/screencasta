/* =========================================================
 * containa-reader.js v0.0.1
 * https://github.com/porschuetz/screencasta/wiki/containa.js#reader
 * =========================================================
 * Copyright 2012 Social Self Publishing, GbR
 * Developers: porschuetz
 * Date: 01.08.12
 * Time: 01:38
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================= */


!function ($) {

    "use strict"; // jshint ;_;


    /* READER CLASS DEFINITION
     * ====================== */

    var reader = function (content, options) {
        this.options = options
        this.$element = $(content)
            .delegate('[data-dismiss="reader"]', 'click.dismiss.reader', $.proxy(this.hide, this))
    }

    reader.prototype = {

        constructor: reader

        , toggle: function () {
            return this[!this.isShown ? 'show' : 'hide']()
        }

        , show: function () {
            var that = this
                , e = $.Event('show')

            this.$element.trigger(e)

            if (this.isShown || e.isDefaultPrevented()) return

            $('body').addClass('reader-open')

            this.isShown = true
            // attempt to build containa-api directly into bootstrap
            //$('.reader-body').html('Loading ...');
            /*
             $.ajax({
                type: 'POST',
                url: 'application/getRelease.php',
                data: {ajax:containaURI},
                dataType: 'json',
                success: function(data) {
                }
            });
            */
            escape.call(this)
            backdrop.call(this, function () {
                var transition = $.support.transition && that.$element.hasClass('fade')

                if (!that.$element.parent().length) {
                    that.$element.appendTo(document.body) //don't move readers dom position
                }

                that.$element
                    .show()

                if (transition) {
                    that.$element[0].offsetWidth // force reflow
                }

                that.$element.addClass('in')

                transition ?
                    that.$element.one($.support.transition.end, function () { that.$element.trigger('shown') }) :
                    that.$element.trigger('shown')

            })
        }

        , hide: function (e) {
            e && e.preventDefault()

            var that = this

            e = $.Event('hide')

            this.$element.trigger(e)

            if (!this.isShown || e.isDefaultPrevented()) return

            this.isShown = false

            $('body').removeClass('reader-open')

            escape.call(this)

            this.$element.removeClass('in')

            $.support.transition && this.$element.hasClass('fade') ?
                hideWithTransition.call(this) :
                hidereader.call(this)
        }

    }


    /* MODAL PRIVATE METHODS
     * ===================== */

    function hideWithTransition() {
        var that = this
            , timeout = setTimeout(function () {
                that.$element.off($.support.transition.end)
                hidereader.call(that)
            }, 500)

        this.$element.one($.support.transition.end, function () {
            clearTimeout(timeout)
            hidereader.call(that)
        })
    }

    function hidereader(that) {
        this.$element
            .hide()
            .trigger('hidden')

        backdrop.call(this)
    }

    function backdrop(callback) {
        var that = this
            , animate = this.$element.hasClass('fade') ? 'fade' : ''

        if (this.isShown && this.options.backdrop) {
            var doAnimate = $.support.transition && animate

            this.$backdrop = $('<div class="reader-backdrop ' + animate + '" />')
                .appendTo(document.body)

            if (this.options.backdrop != 'static') {
                this.$backdrop.click($.proxy(this.hide, this))
            }

            if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

            this.$backdrop.addClass('in')

            doAnimate ?
                this.$backdrop.one($.support.transition.end, callback) :
                callback()

        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass('in')

            $.support.transition && this.$element.hasClass('fade')?
                this.$backdrop.one($.support.transition.end, $.proxy(removeBackdrop, this)) :
                removeBackdrop.call(this)

        } else if (callback) {
            callback()
        }
    }

    function removeBackdrop() {
        this.$backdrop.remove()
        this.$backdrop = null
    }

    function escape() {
        var that = this
        if (this.isShown && this.options.keyboard) {
            $(document).on('keyup.dismiss.reader', function ( e ) {
                e.which == 27 && that.hide()
            })
        } else if (!this.isShown) {
            $(document).off('keyup.dismiss.reader')
        }
    }


    /* MODAL PLUGIN DEFINITION
     * ======================= */

    $.fn.reader = function (option) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data('reader')
                /* hacking in to add sourcefileloader */
                , options = $.extend({}, $.fn.reader.defaults, $this.data(), typeof option == 'object' && option)
            if (!data) $this.data('reader', (data = new reader(this, options)))
            if (typeof option == 'string') data[option]()
            else if (options.show) data.show()
        })
    }

    $.fn.reader.defaults = {
        backdrop: true
        , keyboard: true
        , show: true
    }

    $.fn.reader.Constructor = reader


    /* READER DATA-API
     * ============== */

    $(function () {
        $('body').on('click.reader.data-api', '[data-toggle="reader"]', function ( e ) {
            var $this = $(this), href
                , $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) //strip for ie7
                , option = $target.data('reader') ? 'toggle' : $.extend({}, $target.data(), $this.data())

            e.preventDefault()
            $target.reader(option)
        })
    })

}(window.jQuery);
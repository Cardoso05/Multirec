$(document).ready(function () {

    // Hide & Show Sidebar Toggle //

    $('.nav-toggle').click(function () {

        $('.panel-collapse,.collapse-data').slideToggle(700, function () {

            if ($(this).css('display') == 'none') {

                $(".hide-show").html('Show');

            } else {

                $(".hide-show").html('Hide');

            }

        });

    });

    // Finish Hide & Show Sidebar Toggle //

    // Search Filters | by Letter // 

    $(function () {

        $.fn.extend({

            filterTable: function () {

                return this.each(function () {

                    $(this).on('keyup', function () {

                        var $this = $(this),
                            search = $this.val().toLowerCase(),
                            target = $this.attr('data-filters'),
                            handle = $(target),
                            rows = handle.find('li a');

                        if (search == '') {

                            rows.show();

                        } else {

                            rows.each(function () {

                                var $this = $(this);

                                $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

                            });

                        }
                    });

                });

            }

        });

        $('[data-action="filter"][id="dev-table-filter"]').filterTable();

    });
});
/* 
 * Script de animação das tabs do cadastro de contatos
 * 
 * Criado por: Lucas Andrade
 * Data: 07/08/2017
 * 
 */
$(document).ready(function () {
    $('#accountForm')
            .on('err.field.fv', function (e, data) {
                // data.fv --> The FormValidation instance

                // Get the first invalid field
                var $invalidFields = data.fv.getInvalidFields().eq(0);

                // Get the tab that contains the first invalid field
                var $tabPane = $invalidFields.parents('.tab-pane'),
                        invalidTabId = $tabPane.attr('id');

                // If the tab is not active
                if (!$tabPane.hasClass('active')) {
                    // Then activate it
                    $tabPane.parents('.tab-content')
                            .find('.tab-pane')
                            .each(function (index, tab) {
                                var tabId = $(tab).attr('id'),
                                        $li = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent();

                                if (tabId === invalidTabId) {
                                    // activate the tab pane
                                    $(tab).addClass('active');
                                    // and the associated <li> element
                                    $li.addClass('active');
                                } else {
                                    $(tab).removeClass('active');
                                    $li.removeClass('active');
                                }
                            });

                    // Focus on the field
                    $invalidFields.focus();
                }
            });
});



